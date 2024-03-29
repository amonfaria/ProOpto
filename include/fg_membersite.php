<?php
/*
    Registration/Login script from HTML Form Guide
    V1.0

    This program is free software published under the
    terms of the GNU Lesser General Public License.
    http://www.gnu.org/copyleft/lesser.html
    

This program is distributed in the hope that it will
be useful - WITHOUT ANY WARRANTY; without even the
implied warranty of MERCHANTABILITY or FITNESS FOR A
PARTICULAR PURPOSE.

For updates, please visit:
http://www.html-form-guide.com/php-form/php-registration-form.html
http://www.html-form-guide.com/php-form/php-login-form.html

*/
require_once("mailer/class.phpmailer.php");
require_once("formvalidator.php");

ini_set('display_errors', 'On');
error_reporting(E_ALL);

class FGMembersite
{
    var $admin_email;
    var $from_address;
    
    var $username;
    var $pwd;
    var $database;
    var $tablename;
    var $connection;
    var $rand_key;
    
    var $error_message;
    
    //-----Initialization -------
    function FGMembersite()
    {
        $this->sitename = 'YourWebsiteName.com';
        $this->rand_key = '0iQx5oBk66oVZep';
    }
    
    function InitDB($host,$uname,$pwd,$database,$tablename)
    {
        $this->db_host  = $host;
        $this->username = $uname;
        $this->pwd  = $pwd;
        $this->database  = $database;
        $this->tablename = $tablename;
        
    }
    function SetAdminEmail($email)
    {
        $this->admin_email = $email;
    }
    
    function SetWebsiteName($sitename)
    {
        $this->sitename = $sitename;
    }
    
    function SetRandomKey($key)
    {
        $this->rand_key = $key;
    }
    
    //-------Main Operations ----------------------
    function LinkToCompany()
    {
        if(!isset($_POST['submitted']))
        {
           return false;
        }

        if(!$this->ValidateCompanyLink())
        {
            return false;
        }


        return true;
    }
    function ClientSearch()
    {
        if(!isset($_POST['client_search']))
        {
           return false;
        }

        if(!$this->ClientExist())
        {
            return false;
        }


        return true;
    }
    function RegisterCompany()
    {
        if(!isset($_POST['submitted']))
        {
           return false;
        }

        if(!$this->AddCompanyToDB())
        {
            return false;
        }


        return true;
    }
    function ValidateCompanyInput()
    {

        if(empty($_POST['clinicID']))
        {
            $this->HandleError("ID da Clinica esta vazio!");
            return false;
        }

        if(empty($_POST['clinicName']))
        {
            $this->HandleError("ID da Clinica esta vazio!");
            return false;
        }

        if(empty($_POST['clinicPhone']))
        {
            $this->HandleError("ID da Clinica esta vazio!");
            return false;
        }

        if(empty($_POST['clinicStreet']))
        {
            $this->HandleError("ID da Clinica esta vazio!");
            return false;
        }

        if(empty($_POST['clinicCity']))
        {
            $this->HandleError("ID da Clinica esta vazio!");
            return false;
        }
        if(empty($_POST['clinicZip']))
        {
            $this->HandleError("ID da Clinica esta vazio!");
            return false;
        }
        return true;
    }

    function AddCompanyToDB()
    {

        //This is a hidden input field. Humans won't fill this field.
        if(!empty($_POST[$this->GetSpamTrapInputName()]) )
        {
            //The proper error is not given intentionally
            $this->HandleError("Automated submission prevention: case 2 failed");
            return false;
        }
        if(!$this->ValidateCompanyInput())
        {
            return false;
        }


        $clinicID = trim($_POST['clinicID']);
        $clinicName=trim($_POST['clinicName']);
        $clinicPhone=trim($_POST['clinicPhone']);
        $clinicStreet=trim($_POST['clinicStreet']);
        $clinicCity=trim($_POST['clinicCity']);
        $clinicZip=trim($_POST['clinicZip']);
        $clinicID=$this->SanitizeForSQL($clinicID);
        $clinicName=$this->SanitizeForSQL($clinicName);
        $clinicPhone=$this->SanitizeForSQL($clinicPhone);
        $clinicStreet=$this->SanitizeForSQL($clinicStreet);
        $clinicCity=$this->SanitizeForSQL($clinicCity);
        $clinicZip=$this->SanitizeForSQL($clinicZip);
        if(!isset($_SESSION)){ session_start(); }

        if(!$this->DBLogin())
        {
            $this->HandleError("Database login failed!");
            return false;
        }
        $qry = "insert into companies (tax_id,company_name,street_address,city,zip,phone) values('$clinicID','$clinicName','$clinicStreet','$clinicCity','$clinicZip','$clinicPhone')";

        mysqli_query($this->connection,$qry);


        $_SESSION['user_company']  = $clinicID;
        $_SESSION['company_name']  = $clinicName;
        return true;




    }
    function RegisterClient()
    {
        if(!isset($_POST['submitted']))
        {
           return false;
        }

        $formvars = array();


        $this->CollectClientRegistrationSubmission($formvars);

        if(!$this->SaveClientToDatabase($formvars))
        {
            return false;
        }

        $this->SendClientConfirmationEmail($formvars);
        
        return true;
    }
    function RegisterUser()
    {
        if(!isset($_POST['submitted']))
        {
           return false;
        }
        
        $formvars = array();
        
        if(!$this->ValidateRegistrationSubmission())
        {
            return false;
        }
        
        $this->CollectRegistrationSubmission($formvars);
        
        if(!$this->SaveToDatabase($formvars))
        {
            return false;
        }
        
        if(!$this->SendUserConfirmationEmail($formvars))
        {
            return false;
        }

        $this->SendAdminIntimationEmail($formvars);
        
        return true;
    }

    function ConfirmUser()
    {
        if(empty($_GET['code'])||strlen($_GET['code'])<=10)
        {
            $this->HandleError("Please provide the confirm code");
            return false;
        }
        $user_rec = array();
        if(!$this->UpdateDBRecForConfirmation($user_rec))
        {
            return false;
        }
        
        $this->SendUserWelcomeEmail($user_rec);
        
        $this->SendAdminIntimationOnRegComplete($user_rec);
        
        return true;
    }    
    
    function Login()
    {
        if(empty($_POST['username']))
        {
            $this->HandleError("UserName is empty!");
            return false;
        }
        
        if(empty($_POST['password']))
        {
            $this->HandleError("Password is empty!");
            return false;
        }
        
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        
        if(!isset($_SESSION)){ session_start(); }
        if(!$this->CheckLoginInDB($username,$password))
        {
            return false;
        }
        
        $_SESSION[$this->GetLoginSessionVar()] = $username;
        
        return true;
    }
    
    function CheckLogin()
    {
         if(!isset($_SESSION)){ session_start(); }

         $sessionvar = $this->GetLoginSessionVar();
         
         if(empty($_SESSION[$sessionvar]))
         {
            return false;
         }
         return true;
         $this->SetSessionVars;
    }
    
    function UserFullName()
    {
        return isset($_SESSION['name_of_user'])?$_SESSION['name_of_user']:'';
    }
    function GetClinicName()
    {
        return isset($_SESSION['company_name'])?$_SESSION['company_name']:'';
    }
    function ClientID()
    {
        return isset($_SESSION['client_id'])?$_SESSION['client_id']:'';
    } 
    function UserEmail()
    {
        return isset($_SESSION['email_of_user'])?$_SESSION['email_of_user']:'';
    }
    function UserFirstLogin()
    {
        $this->SetSessionVars();
        $firstlogin=$_SESSION['user_first_login'];
        if (strcmp($this->SanitizeForSQL('y'), $firstlogin) !== 0) {
            return false;
        }
        return true;
    } 
    function UserClass()
    {
    
        return isset($_SESSION['class_of_user'])?$_SESSION['class_of_user']:'';
    
 
    }
    function DisplayAccess()
    {
        if(!$this->DBLogin())
                {
                    $this->HandleError("Database login failed!");
                    return false;
                }
                $company= $this->SanitizeForSQL($_SESSION['user_company']);
                $qry = "Select * from member2 where company='$company'";
        
                $results = mysqli_query($this->connection,$qry);
                
                if(!$results || mysqli_num_rows($results) <= 0)
                {
                    return false;
                }
                
                $accessInfo = array(); 
                
                if (mysqli_num_rows($results)) 
                { 
                
                    while ($result = mysqli_fetch_assoc($results)) 
                    { 
                        $accessInfo[] = $result; 
                    } 
                } 
                mysqli_free_result($results); 
                
                return $accessInfo; 
    
    }
    function LogOut()
    {
        session_start();
        
        $sessionvar = $this->GetLoginSessionVar();
        
        $_SESSION[$sessionvar]=NULL;
        
        unset($_SESSION[$sessionvar]);
    }
    
    function EmailResetPasswordLink()
    {
        if(empty($_POST['email']))
        {
            $this->HandleError("Email is empty!");
            return false;
        }
        $user_rec = array();
        if(false === $this->GetUserFromEmail($_POST['email'], $user_rec))
        {
            return false;
        }
        if(false === $this->SendResetPasswordLink($user_rec))
        {
            return false;
        }
        return true;
    }
    
    function ResetPassword()
    {
        if(empty($_GET['email']))
        {
            $this->HandleError("Email is empty!");
            return false;
        }
        if(empty($_GET['code']))
        {
            $this->HandleError("reset code is empty!");
            return false;
        }
        $email = trim($_GET['email']);
        $code = trim($_GET['code']);
        
        if($this->GetResetPasswordCode($email) != $code)
        {
            $this->HandleError("Bad reset code!");
            return false;
        }
        
        $user_rec = array();
        if(!$this->GetUserFromEmail($email,$user_rec))
        {
            return false;
        }
        
        $new_password = $this->ResetUserPasswordInDB($user_rec);
        if(false === $new_password || empty($new_password))
        {
            $this->HandleError("Error updating new password");
            return false;
        }
        
        if(false == $this->SendNewPassword($user_rec,$new_password))
        {
            $this->HandleError("Error sending new password");
            return false;
        }
        return true;
    }
    
    function ChangePassword()
    {
        if(!$this->CheckLogin())
        {
            $this->HandleError("Not logged in!");
            return false;
        }
        
        if(empty($_POST['oldpwd']))
        {
            $this->HandleError("Old password is empty!");
            return false;
        }
        if(empty($_POST['newpwd']))
        {
            $this->HandleError("New password is empty!");
            return false;
        }
        
        $user_rec = array();
        if(!$this->GetUserFromEmail($this->UserEmail(),$user_rec))
        {
            return false;
        }
        
        $pwd = trim($_POST['oldpwd']);
        
        if($user_rec['password'] != md5($pwd))
        {
            $this->HandleError("The old password does not match!");
            return false;
        }
        $newpwd = trim($_POST['newpwd']);
        
        if(!$this->ChangePasswordInDB($user_rec, $newpwd))
        {
            return false;
        }
        return true;
    }
    
    //-------Public Helper functions -------------
    function GetSelfScript()
    {
        return htmlentities($_SERVER['PHP_SELF']);
    }    
    
    function SafeDisplay($value_name)
    {
        if(empty($_POST[$value_name]))
        {
            return'';
        }
        return htmlentities($_POST[$value_name]);
    }
    
    function RedirectToURL($url)
    {
        header("Location: $url");
        exit;
    }
    
    function GetSpamTrapInputName()
    {
        return 'sp'.md5('KHGdnbvsgst'.$this->rand_key);
    }
    
    function GetErrorMessage()
    {
        if(empty($this->error_message))
        {
            return '';
        }
        $errormsg = nl2br(htmlentities($this->error_message));
        return $errormsg;
    }    
    //-------Private Helper functions-----------
    
    function HandleError($err)
    {
        $this->error_message .= $err."\r\n";
    }
    
    function HandleDBError($err)
    {
        $this->HandleError($err."\r\n mysqlerror:".mysqli_error($this->connection));
    }
    
    function GetFromAddress()
    {
        if(!empty($this->from_address))
        {
            return $this->from_address;
        }

        $host = $_SERVER['SERVER_NAME'];

        $from ="webmaster@proopto.com.br";
        return $from;
    } 
    
    function GetLoginSessionVar()
    {
        $retvar = md5($this->rand_key);
        $retvar = 'usr_'.substr($retvar,0,10);
        return $retvar;
    }
    function IsFirstLogin()
    {

        if(!$this->DBLogin())
        {
            $this->HandleError("Database login failed!");
            return false;
        }
        $email= $this->SanitizeForSQL($_session['email_of_user']);
        $qry = "Select name, email,company,first_login from $this->tablename where email='$email' and first_login='y' and confirmcode='y'";

        $result = mysqli_query($this->connection,$qry);

        if(!$result || mysqli_num_rows($result) <= 0)
        {
            return false;
        }

        $row = mysqli_fetch_assoc($result);
        if ($row['first_login']=='y')
        {   
            mysqli_free_result($result); 
            return false;
        }

        $_SESSION['name_of_user']  = $row['name'];
        $_SESSION['email_of_user'] = $row['email'];
        $_SESSION['user_first_login']=$row['first_login'];
        $_SESSION['user_company']=$row['company'];
        $_SESSION['company_name']=$row['company_name'];
        mysqli_free_result($result);
        return true;
    } 
    function CheckLoginInDB($username,$password)
    {
        if(!$this->DBLogin())
        {
            $this->HandleError("Database login failed!");
            return false;
        }          
        $username = $this->SanitizeForSQL($username);
        $pwdmd5 = md5($password);
        $qry = "Select name, email,company,first_login,class_of_user from $this->tablename where username='$username' and password='$pwdmd5' and confirmcode='y'";
        
        $result = mysqli_query($this->connection,$qry);
        
        if(!$result || mysqli_num_rows($result) <= 0)
        {
            $this->HandleError("Error logging in. The username or password does not match");
            return false;
        }
        
        $row = mysqli_fetch_assoc($result);
        
        
        $_SESSION['name_of_user']  = $row['name'];
        $_SESSION['email_of_user'] = $row['email'];
        $_SESSION['user_first_login']=$row['first_login'];
        $_SESSION['user_company']=$row['company'];
        $_SESSION['class_of_user']=$row['class_of_user'];
        mysqli_free_result($result);
        return true;
    }
   
    function SetSessionVars()
    {
        if(!$this->DBLogin())
        {
            $this->HandleError("Database login failed!");
            return false;
        }
        $email = $this->SanitizeForSQL($_SESSION['email_of_user']);
        $qry = "Select * from $this->tablename where email='$email' and confirmcode='y'";

        $result = mysqli_query($this->connection,$qry);

        if(!$result || mysqli_num_rows($result) <= 0)
        {
            $this->HandleError("Error logging in. The username or password does not match");
            return false;
        }

        $row = mysqli_fetch_assoc($result);


        $_SESSION['name_of_user']  = $row['name'];
        $_SESSION['email_of_user'] = $row['email'];
        $_SESSION['user_first_login']=$row['first_login'];
        $_SESSION['user_company']=$row['company'];
        $_SESSION['company_name']=$row['company_name'];
        $_SESSION['class_of_user']=$row['class_of_user'];
        mysqli_free_result($result);
        return true;
    } 
    function UpdateDBRecForConfirmation(&$user_rec)
    {
        if(!$this->DBLogin())
        {
            $this->HandleError("Database login failed!");
            return false;
        }   
        $confirmcode = $this->SanitizeForSQL($_GET['code']);
        
        $result = mysqli_query($this->connection,"Select name, email from $this->tablename where confirmcode='$confirmcode'");   
        if(!$result || mysqli_num_rows($result) <= 0)
        {
            $this->HandleError("Wrong confirm code.");
            return false;
        }
        $row = mysqli_fetch_assoc($result);
        $user_rec['name'] = $row['name'];
        $user_rec['email']= $row['email'];
        
        $qry = "Update $this->tablename Set confirmcode='y' Where  confirmcode='$confirmcode'";
        
        if(!mysqli_query( $qry ,$this->connection))
        {
            $this->HandleDBError("Error inserting data to the table\nquery:$qry");
            return false;
        }
        mysqli_free_result($result);
        return true;
    }
    
    function ResetUserPasswordInDB($user_rec)
    {
        $new_password = substr(md5(uniqid()),0,10);
        
        if(false == $this->ChangePasswordInDB($user_rec,$new_password))
        {
            return false;
        }
        return $new_password;
    }
    
    function ChangePasswordInDB($user_rec, $newpwd)
    {
        $newpwd = $this->SanitizeForSQL($newpwd);
        
        $qry = "Update $this->tablename Set password='".md5($newpwd)."' Where  id_user=".$user_rec['id_user']."";
        
        if(!mysqli_query( $qry ,$this->connection))
        {
            $this->HandleDBError("Error updating the password \nquery:$qry");
            return false;
        }     
        return true;
    }
    
    function GetUserFromEmail($email,&$user_rec)
    {
        if(!$this->DBLogin())
        {
            $this->HandleError("Database login failed!");
            return false;
        }   
        $email = $this->SanitizeForSQL($email);
        
        $result = mysqli_query($this->connection,"Select * from $this->tablename where email='$email'");  

        if(!$result || mysqli_num_rows($result) <= 0)
        {
            $this->HandleError("There is no user with email: $email");
            return false;
        }
        $user_rec = mysqli_fetch_assoc($result);

        mysqli_free_result($result);
        return true;
    }
    
    function SendUserWelcomeEmail(&$user_rec)
    {
        $mailer = new PHPMailer();
        
        $mailer->CharSet = 'utf-8';

        $mailer->IsSMTP();  // telling the class to use SMTP
        $mailer->Host     = "localhost"; // SMTP server
        $mailer->Username = "Amon";
        $mailer->Password = "Agoiano1";        
        $mailer->AddAddress($user_rec['email'],$user_rec['name']);
        
        $mailer->Subject = "Welcome to ".$this->sitename;

        $mailer->From = $this->GetFromAddress();        
        $mailer->AddReplyTo("amon@faria.cc","Amon Faria");

        $mailer->SetFrom('amon@faria.cc', 'Amon Faria');

 
        $mailer->Body ="Ola ".$user_rec['name']."\r\n\r\n".
        "Bem Vindo(a)! O seu cadastro com ProOpto esta completo\r\n".
        "\r\n".
        "Regards,\r\n".
        "Webmaster\r\n".
        $this->sitename;
        if(!$mailer->Send())
        {
            $this->HandleError("Failed sending user welcome email.");
            return false;
        }
        return true;
    }
    
    function SendAdminIntimationOnRegComplete(&$user_rec)
    {
        if(empty($this->admin_email))
        {
            return false;
        }
        $mailer = new PHPMailer();
        
        $mailer->CharSet = 'utf-8';
        
        $mailer->AddAddress($this->admin_email);
        
        $mailer->Subject = "Registration Completed: ".$user_rec['name'];

        $mailer->From = $this->GetFromAddress();         
        
        $mailer->Body ="A new user registered at ".$this->sitename."\r\n".
        "Name: ".$user_rec['name']."\r\n".
        "Email address: ".$user_rec['email']."\r\n";
        
        if(!$mailer->Send())
        {
            return false;
        }
        return true;
    }
    
    function GetResetPasswordCode($email)
    {
       return substr(md5($email.$this->sitename.$this->rand_key),0,10);
    }
    
    function SendResetPasswordLink($user_rec)
    {
        $email = $user_rec['email'];
        
        $mailer = new PHPMailer();
        
        $mailer->CharSet = 'utf-8';
        
        $mailer->AddAddress($email,$user_rec['name']);
        
        $mailer->Subject = "Your reset password request at ".$this->sitename;

        $mailer->From = $this->GetFromAddress();
        
        $link = $this->GetAbsoluteURLFolder().
                '/resetpwd.php?email='.
                urlencode($email).'&code='.
                urlencode($this->GetResetPasswordCode($email));

        $mailer->Body ="Hello ".$user_rec['name']."\r\n\r\n".
        "There was a request to reset your password at ".$this->sitename."\r\n".
        "Please click the link below to complete the request: \r\n".$link."\r\n".
        "Regards,\r\n".
        "Webmaster\r\n".
        $this->sitename;
        
        if(!$mailer->Send())
        {
            return false;
        }
        return true;
    }
    
    function SendNewPassword($user_rec, $new_password)
    {
        $email = $user_rec['email'];
        
        $mailer = new PHPMailer();
        
        $mailer->CharSet = 'utf-8';
        
        $mailer->AddAddress($email,$user_rec['name']);
        
        $mailer->Subject = "Your new password for ".$this->sitename;

        $mailer->From = $this->GetFromAddress();
        
        $mailer->Body ="Hello ".$user_rec['name']."\r\n\r\n".
        "Your password is reset successfully. ".
        "Here is your updated login:\r\n".
        "username:".$user_rec['username']."\r\n".
        "password:$new_password\r\n".
        "\r\n".
        "Login here: ".$this->GetAbsoluteURLFolder()."/login.php\r\n".
        "\r\n".
        "Regards,\r\n".
        "Webmaster\r\n".
        $this->sitename;
        
        if(!$mailer->Send())
        {
            return false;
        }
        return true;
    }    

//PROBLEM WITH THIS FUNCTION FIND OUT WHAT
    function ClientExist()
    {
        //This is a hidden input field. Humans won't fill this field.
        if(!empty($_POST[$this->GetSpamTrapInputName()]) )
        {
            //The proper error is not given intentionally
            $this->HandleError("Automated submission prevention: case 2 failed");
            return false;
        }
        if(empty($_POST['clientID']))
        {
            $this->HandleError("ID do cliente esta vazio!");
            return false;
        }


        $clientID = trim($_POST['clientID']);


        if(!isset($_SESSION)){ session_start(); }
        if(!$this->CheckClientInDB())
        {
            return false;
        }
        return true;


    }
//PROBLEM WITH THIS FUNCTION FIND OUT WHAT
    function ValidateCompanyLink()
    {
        //This is a hidden input field. Humans won't fill this field.
        if(!empty($_POST[$this->GetSpamTrapInputName()]) )
        {
            //The proper error is not given intentionally
            $this->HandleError("Automated submission prevention: case 2 failed");
            return false;
        }
        if(empty($_POST['clinicID']))
        {
            $this->HandleError("ID da Clinica esta vazio!");
            return false;
        }


        $clinicID = trim($_POST['clinicID']);


        if(!isset($_SESSION)){ session_start(); }
        if(!$this->CheckCompanyLinkInDB())
        {
            return false;
        }
        return true;


    }   

    function CheckCompanyLinkInDB()
    {
        if(!$this->DBLogin())
        {
            $this->HandleError("Database login failed!");
            return false;
        }
        $clinicID = $this->SanitizeForSQL($_POST['clinicID']);
        $email=$_SESSION['email_of_user'];
        $_SESSION['user_company']  = $clinicID;
        $qry = "update member2 set company='$clinicID' where email='$email'";

        mysqli_query($this->connection,$qry);
        $qry = "update member2 set first_login='n' where email='$email'";

        mysqli_query($this->connection,$qry);

        $qry = "select tax_id from companies where tax_id='$clinicID'";

        $result = mysqli_query($this->connection,$qry);


        if(!$result || mysqli_num_rows($result) <= 0)
        {
            return false;
        }
        mysqli_free_result($result);
        return true;




    }


    function GetPatientInfo()
    {
        if(!$this->DBLogin())
        {
            $this->HandleError("Database login failed!");
            return false;
        }
        $clientID = $this->SanitizeForSQL($_SESSION['client_id']);
        $qry = "select * from clients where id_client='$clientID'";

        $result = mysqli_query($this->connection,$qry);


        if(!$result || mysqli_num_rows($result) <= 0)
        {
            return false;
        }
        return mysqli_fetch_assoc($result);




    } 
    function CheckClientInDB()
    {
        if(!$this->DBLogin())
        {
            $this->HandleError("Database login failed!");
            return false;
        }
        $clientID = $this->SanitizeForSQL($_POST['clientID']);
        $email=$_SESSION['email_of_user'];
        $clinicID=$_SESSION['user_company'];
        $qry = "select * from clients where client_cpf='$clientID'";

        $result = mysqli_query($this->connection,$qry);


        if(!$result || mysqli_num_rows($result) <= 0)
        {
            return false;
        }
        $row = mysqli_fetch_assoc($result);
        $_SESSION['client_id']=$row['id_client']; 
        mysqli_free_result($result);
        return true;




    }
    function ValidateRegistrationSubmission()
    {
        //This is a hidden input field. Humans won't fill this field.
        if(!empty($_POST[$this->GetSpamTrapInputName()]) )
        {
            //The proper error is not given intentionally
            $this->HandleError("Automated submission prevention: case 2 failed");
            return false;
        }
        
        $validator = new FormValidator();
        $validator->addValidation("name","req","Please fill in Name");
        $validator->addValidation("email","email","The input for Email should be a valid email value");
        $validator->addValidation("email","req","Please fill in Email");
        $validator->addValidation("username","req","Please fill in UserName");
        $validator->addValidation("password","req","Please fill in Password");

        
        if(!$validator->ValidateForm())
        {
            $error='';
            $error_hash = $validator->GetErrors();
            foreach($error_hash as $inpname => $inp_err)
            {
                $error .= $inpname.':'.$inp_err."\n";
            }
            $this->HandleError($error);
            return false;
        }        
        return true;
    }
    function CollectClientRegistrationSubmission(&$formvars)
    {
        $formvars['first_name'] = $this->Sanitize($_POST['first_name']);
        $formvars['last_name'] = $this->Sanitize($_POST['last_name']);
        $formvars['client_cpf'] = $this->Sanitize($_POST['cpf']);
        $formvars['email'] = $this->Sanitize($_POST['email']);
        $formvars['client_dob'] = $this->Sanitize($_POST['dob']);
        $formvars['client_phone'] = $this->Sanitize($_POST['phone']);
        $formvars['client_street'] = $this->Sanitize($_POST['street']);
        $formvars['client_city'] = $this->Sanitize($_POST['city']);
        $formvars['client_state'] = $this->Sanitize($_POST['state']);
        $formvars['client_ocupation'] = $this->Sanitize($_POST['occupation']);
        $formvars['client_gender'] = $this->Sanitize($_POST['gender']);
    }    
    function CollectRegistrationSubmission(&$formvars)
    {
        $formvars['name'] = $this->Sanitize($_POST['name']);
        $formvars['email'] = $this->Sanitize($_POST['email']);
        $formvars['username'] = $this->Sanitize($_POST['username']);
        $formvars['password'] = $this->Sanitize($_POST['password']);
        $formvars['company'] = $this->Sanitize($_POST['company']);
    }


    function SendClientConfirmationEmail(&$formvars)
    {
        $mailer = new PHPMailer();

        $mailer->CharSet = 'utf-8';

        $mailer->IsSMTP();  // telling the class to use SMTP
        $mailer->Host     = "localhost"; // SMTP server
        $mailer->Username = "Amon";
        $mailer->Password = "Agoiano1";
        $clinic_name=$_SESSION["company_name"];
        $mailer->AddAddress($formvars['email'],$formvars['first_name']);

        $mailer->Subject = "Your registration with ".$this->sitename;

        $mailer->From = $this->GetFromAddress();
        $mailer->AddReplyTo("amon@faria.cc","Amon Faria");

        $mailer->SetFrom('amon@faria.cc', 'Amon Faria');



        $mailer->Body ="Ola ".$formvars['first_name']."\r\n\r\n".
        "Obrigado por iniciar seu cadastro\r\n".
        "Voce acabou de ser registrado na clinica ".
        "$clinic_name\r\n".
        "\r\n".
        "Regards,\r\n".
        "Webmaster\r\n".
        $this->sitename;
        if(!$mailer->Send())
        {
            $this->HandleError("Failed sending registration confirmation email.");
            return false;
        }
        return true;
    }    
    function SendUserConfirmationEmail(&$formvars)
    {
        $mailer = new PHPMailer();
        
        $mailer->CharSet = 'utf-8';
        $mailer->IsSMTP();  // telling the class to use SMTP
        $mailer->Host     = "localhost"; // SMTP server
        $mailer->Username = "Amon";
        $mailer->Password = "Agoiano1";
        
        $mailer->AddAddress($formvars['email'],$formvars['name']);
        
        $mailer->Subject = "Your registration with ".$this->sitename;

        $mailer->From = $this->GetFromAddress();       
        $mailer->AddReplyTo("amon@faria.cc","Amon Faria");

        $mailer->SetFrom('amon@faria.cc', 'Amon Faria'); 
        
        $confirmcode = $formvars['confirmcode'];
        
        $confirm_url = $this->GetAbsoluteURLFolder().'/confirmreg.php?code='.$confirmcode;
        
        $mailer->Body ="Ola ".$formvars['name']."\r\n\r\n".
        "Obrigado por iniciar seu cadastro\r\n".
        "Clique no link abaixo para completar seu registro\r\n".
        "$confirm_url\r\n".
        "\r\n".
        "Regards,\r\n".
        "Webmaster\r\n".
        $this->sitename;
        if(!$mailer->Send())
        {
            $this->HandleError("Failed sending registration confirmation email.");
            return false;
        }
        return true;
    }
    function GetAbsoluteURLFolder()
    {
        $scriptFolder = (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on')) ? 'https://' : 'http://';
        $scriptFolder .= $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']);
        return $scriptFolder;
    }
    
    function SendAdminIntimationEmail(&$formvars)
    {
        if(empty($this->admin_email))
        {
            return false;
        }
        $mailer = new PHPMailer();
        
        $mailer->CharSet = 'utf-8';
        
        $mailer->AddAddress($this->admin_email);
        
        $mailer->Subject = "New registration: ".$formvars['name'];

        $mailer->From = $this->GetFromAddress();         
        
        $mailer->Body ="A new user registered at ".$this->sitename."\r\n".
        "Name: ".$formvars['name']."\r\n".
        "Email address: ".$formvars['email']."\r\n".
        "UserName: ".$formvars['username'];
        
        if(!$mailer->Send())
        {
            return false;
        }
        return true;
    }
    function SaveClientToDatabase(&$formvars)
    {
        if(!$this->DBLogin())
        {
            $this->HandleError("Database login failed!");
            return false;
        }
        if(!$this->Ensuretable())
        {
            return false;
        }
        if(!$this->IsClientFieldUnique($formvars,'client_email'))
        {
            $this->HandleError("This email is already registered");
            return false;
        }

        if(!$this->IsClientFieldUnique($formvars,'client_cpf'))
        {
            $this->HandleError("Este CPF Ja esta registrado. Por Favor Use outro");
            return false;
        }
        if(!$this->InsertClientIntoDB($formvars))
        {
            $this->HandleError("Inserting to Database failed!");
            return false;

        }
        return true;
    }    
    function SaveToDatabase(&$formvars)
    {
        if(!$this->DBLogin())
        {
            $this->HandleError("Database login failed!");
            return false;
        }
        if(!$this->Ensuretable())
        {
            return false;
        }
        if(!$this->IsFieldUnique($formvars,'email'))
        {
            $this->HandleError("This email is already registered");
            return false;
        }
        if(!$this->InsertIntoDB($formvars))
        {
            $this->HandleError("Inserting to Database failed!");
            return false;
        }
        return true;
    }
    
    function IsFieldUnique($formvars,$fieldname)
    {
        $field_val = $this->SanitizeForSQL($formvars[$fieldname]);
        $qry = "select * from $this->tablename where $fieldname='".$field_val."'";
        $result = mysqli_query($this->connection,$qry);   
        if($result && mysqli_num_rows($result) > 0)
        {
            return false;
        }
        mysqli_free_result($result);
        return true;
    }
    function IsClientFieldUnique($formvars,$fieldname,$tablename)
    {
        $table_val=$this->SanitizeForSQL($tablename);
        $field_val = $this->SanitizeForSQL($formvars[$fieldname]);
        $qry = "select * from $table_val where $fieldname='".$field_val."'";
        $result = mysqli_query($this->connection,$qry);
        if($result && mysqli_num_rows($result) > 0)
        {
            return false;
        }
        mysqli_free_result($result);
        return true;
    } 
    function DBLogin()
    {

        $this->connection = mysqli_connect($this->db_host,$this->username,$this->pwd);

        if(!$this->connection)
        {   
            $this->HandleDBError("Database Login failed! Please make sure that the DB login credentials provided are correct");
            return false;
        }
        if(!mysqli_select_db($this->connection,$this->database))
        {
            $this->HandleDBError('Failed to select database: '.$this->database.' Please make sure that the database name provided is correct');
            return false;
        }
        if(!mysqli_query($this->connection,"SET NAMES 'UTF8'"))
        {
            $this->HandleDBError('Error setting utf8 encoding');
            return false;
        }
        return true;
    }    
    
    function Ensuretable()
    {
        $result = mysqli_query($this->connection,"SHOW COLUMNS FROM $this->tablename");   
        if(!$result || mysqli_num_rows($result) <= 0)
        {
            return $this->CreateTable();
        }
        return true;
    }
    
    function CreateTable()
    {
        $qry = "Create Table $this->tablename (".
                "id_user INT NOT NULL AUTO_INCREMENT ,".
                "name VARCHAR( 128 ) NOT NULL ,".
                "email VARCHAR( 64 ) NOT NULL ,".
                "phone_number VARCHAR( 16 ) NOT NULL ,".
                "username VARCHAR( 16 ) NOT NULL ,".
                "password VARCHAR( 32 ) NOT NULL ,".
                "confirmcode VARCHAR(32) ,".
                "PRIMARY KEY ( id_user )".
                ")";
                
        if(!mysqli_query($this->connection,$qry))
        {
            $this->HandleDBError("Error creating the table \nquery was\n $qry");
            return false;
        }
        return true;
    }
    function InsertClientIntoDB(&$formvars)
    {


        $insert_query = 'insert into clients (
                client_first_name,
                client_last_name,
                client_email,
                client_cpf,
                client_phone,
                address_street,
                address_city,
                address_state,
                client_dob,
                client_gender,
                client_ocupation
                )
                values
                (
                "' . $this->SanitizeForSQL($formvars['first_name']) . '",
                "' . $this->SanitizeForSQL($formvars['last_name']) . '",
                "' . $this->SanitizeForSQL($formvars['email']) . '",
                "' . $this->SanitizeForSQL($formvars['client_cpf']) . '",
                "' . $this->SanitizeForSQL($formvars['client_phone']) . '",
                "' . $this->SanitizeForSQL($formvars['client_street']) . '",
                "' . $this->SanitizeForSQL($formvars['client_city']) . '",
                "' . $this->SanitizeForSQL($formvars['client_state']) . '",
                "' . $this->SanitizeForSQL($formvars['client_dob']) . '",
                "' . $this->SanitizeForSQL($formvars['client_gender']) . '",
                "' . $this->SanitizeForSQL($formvars['client_ocupation']) . '"
                )';
        if(!mysqli_query($this->connection,$insert_query))
        {
            $this->HandleDBError("Error inserting data to the table\nquery:$insert_query");
            return false;
        }
        return true;
    } 
    function InsertIntoDB(&$formvars)
    {
    
        $confirmcode = $this->MakeConfirmationMd5($formvars['email']);
        
        $formvars['confirmcode'] = $confirmcode;
        $initial_company='0';
        $first_login='y';
        $insert_query = 'insert into '.$this->tablename.'(
                name,
                email,
                username,
                password,
                company,
                first_login,
                confirmcode
                )
                values
                (
                "' . $this->SanitizeForSQL($formvars['name']) . '",
                "' . $this->SanitizeForSQL($formvars['email']) . '",
                "' . $this->SanitizeForSQL($formvars['username']) . '",
                "' . md5($formvars['password']) . '",
                "'.$initial_company.'",
                "'.$first_login.'",
                "' . $confirmcode . '"
                )';      
        if(!mysqli_query($this->connection,$insert_query))
        {
            $this->HandleDBError("Error inserting data to the table\nquery:$insert_query");
            return false;
        }        
        return true;
    }
    function MakeConfirmationMd5($email)
    {
        $randno1 = rand();
        $randno2 = rand();
        return md5($email.$this->rand_key.$randno1.''.$randno2);
    }
    function SanitizeForSQL($str)
    {
        if( function_exists( "mysqli_real_escape_string" ) )
        {
              $ret_str = mysqli_real_escape_string($this->connection,$str );
        }
        else
        {
              $ret_str = addslashes( $str );
        }
        return $ret_str;
    }
    
 /*
    Sanitize() function removes any potential threat from the
    data submitted. Prevents email injections or any other hacker attempts.
    if $remove_nl is true, newline chracters are removed from the input.
    */
    function Sanitize($str,$remove_nl=true)
    {
        $str = $this->StripSlashes($str);

        if($remove_nl)
        {
            $injections = array('/(\n+)/i',
                '/(\r+)/i',
                '/(\t+)/i',
                '/(%0A+)/i',
                '/(%0D+)/i',
                '/(%08+)/i',
                '/(%09+)/i'
                );
            $str = preg_replace($injections,'',$str);
        }

        return $str;
    }    
    function StripSlashes($str)
    {
        if(get_magic_quotes_gpc())
        {
            $str = stripslashes($str);
        }
        return $str;
    }    
}
?>
