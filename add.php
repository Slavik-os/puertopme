<?php
     ob_start();
     include('index.php');
     ob_end_clean();
     require ('inc/config.php');
     
     if(isset($_SESSION['username'])){
        if ($_SESSION['role'] != "responsable"){
            header("Location:404");
        }
     }else {
        header("Location:logout.php");
     }
   // Upload image :
   $target_dir = "uploads/";
   $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
   echo $target_file;
   $uploadOk = 1;
   $allowed = ['jpeg','jpg','gif','png'];
   $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
   if(isset($_POST['submit'])){
       $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
       if($check) {
           $uploadOK =1;
       }else {
           header("Location:index.php?submit=Seules les images sont autorisées à être téléchargées");
           $uploadOK =0;
           die();
       }
       if(!in_array($imageFileType,$allowed)){
           header("Location:index.php?submit=seuls les fichiers JPG, JPEG, PNG et GIF sont autorisés.");
           $uploadOK =0;
           die();
       }
       if ($uploadOk==0){
           header("Location:index.php?submit= Quelque chose s\'est mal passé");
           die();
       }else{
           if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
               $uploadOK= 1;
           }
       }
       
   }
//    echo $target_file;
    //  record user data
    $matricule = mysqli_real_escape_string($con,$_POST['matricule']);
    $firstname=  mysqli_real_escape_string($con,$_POST['firstName']);
    $lastname = mysqli_real_escape_string($con,$_POST['lastname']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $username = mysqli_real_escape_string($con,$_POST['username']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $cin = mysqli_real_escape_string($con,$_POST['cin']);
    $date_em =mysqli_real_escape_string($con,$_POST['date_em']);
    $address =mysqli_real_escape_string($con,$_POST['address']);
    $photo = mysqli_real_escape_string($con,$target_file);
    $phone_portable = mysqli_real_escape_string($con,$_POST['phone_portable']);
    $numero_extenstion = mysqli_real_escape_string($con,$_POST['numero_extenstion']);
    $numero_fix = mysqli_real_escape_string($con,$_POST['numero_fix']);
    $fonction = mysqli_real_escape_string($con,$_POST['fonction']);
    $departements = mysqli_real_escape_string($con,$_POST['departements']);
    $bureaux = mysqli_real_escape_string($con,$_POST['bureaux']);
    $post = mysqli_real_escape_string($con,$_POST['post']);
    $old_mat = mysqli_real_escape_string($con,$_POST['edit']);
    
   

    // record user data end
     
     class Employee {
         public $matricule ;
         public $firstname;
         public $lastname;
         public $email;
         public $username;
         public $cin;
         public $date_em;
         public $address;
         public $photo;
         public $phone_portable;
         public $phone_extenstion;
         public $phone_fix;
         public $fonction;
         public $departements;
         public $bureaux;
         public $listOfErrors = [];
         public $old_mat;
         public $post;
         private $con;
        function __construct(
                            $matricule,$firstname,$lastname,$photo,$email,
                            $username,$password,$cin,$date_em,$departements,$bureaux,$post,
                            $fonction,$address,$phone_portable,$phone_extenstion,
                            $phone_fix,$old_mat)
                            {
                                $this->matricule = $matricule;
                                $this->firstname = $firstname;
                                $this->lastname  = $lastname;
                                $this->photo = $photo;
                                $this->email     = $email;
                                $this->username  = $username;
                                $this->password  = $password;
                                $this->cin       = $cin;
                                $this->date_em   = $date_em;
                                $this->address   = $address;
                                $this->phone_portable  = $phone_portable;
                                $this->phone_extenstion = $phone_extenstion;
                                $this->phone_fix = $phone_fix;
                                $this->fonction = $fonction;
                                $this->departements = $departements;
                                $this->bureaux = $bureaux;
                                $this->post = $post;
                                $this->old_mat = $old_mat;
                                $this->con=mysqli_connect("localhost","root","nomads","puerto_dbs"); // reconnect via oop
                            }
        public function check_for_dup($check,$string,$message){
            $this->query="SELECT $check FROM employes_tbl WHERE $check = '$string'";
            $this->result =  mysqli_query($this->con,$this->query);
            $this->row = mysqli_fetch_array($this->result);
            if ($this->row !=Null){
                array_push($this->listOfErrors,$message);
            }
        }
        function create_new_recode(){
            // check if duplication exists :
           
            $this->check_for_dup('matricule',$this->matricule,'Matricule');
            $this->check_for_dup('username',$this->username,'username');
            $this->check_for_dup('cin',$this->cin,'cin');
            $this->check_for_dup('email',$this->email,'email');
            $this->check_for_dup('phone_portable',$this->phone_portable,'Numero (Portable)');
            $this->check_for_dup('phone_portable',$this->phone_extenstion,'Numero d`extention');
            $this->check_for_dup('phone_portable',$this->phone_extenstion,'Numero Fix');
           if(sizeof($this->listOfErrors) === 0 ){
            $this->query ="DROP TABLE IF EXISTS puerto_dbs.departments ;
            CREATE TABLE departments( SELECT id,firstName,lastName,departement 
            FROM employes_tbl WHERE role='responsable');
            ";
            $this->con->query($this->query);
               $this->query=("INSERT INTO employes_tbl(
                matricule,firstName,lastname,photo,email,username,password,
                cin,date_em,departement,burreaux,post,fonction,address,
                phone_portable,phone_extenstion,phone_fix,role)
                VALUES(
                    '$this->matricule','$this->firstname','$this->lastname','$this->photo','$this->email',
                    '$this->username','".md5($this->password)."','$this->cin'
                    ,DATE_FORMAT('$this->date_em','%Y-%m-%d'),'$this->departements','$this->bureaux'
                    ,'$this->post','$this->fonction','$this->address','$this->phone_portable',
                    '$this->phone_extenstion','$this->phone_fix','')
                 ");
                 
                 $this->result =  mysqli_query($this->con,$this->query);
                 $this->con->query($this->query);
                 header("Location:index.php?success=Success !");
                
           }else {
            $this->err_string ='';
            foreach($this->listOfErrors as $l){
                $this->err_string .= $l.' , ';
            }
                header("Location:index.php?submit=$this->err_string Dejat Exists");
                }
                    
        }

        function edit_recorde(){
                $this->query ="DROP TABLE IF EXISTS puerto_dbs.departments ;
                CREATE TABLE departments( SELECT id,firstName,lastName,departement 
                FROM employes_tbl WHERE role='responsable');
                ";
                $this->con->query($this->query);
                $this->query = "UPDATE employes_tbl SET
                    matricule = '$this->matricule',
                    firstName = '$this->firstname',
                    lastname  = '$this->lastname',
                    cin = '$this->cin',
                    email = '$this->email',
                    date_em = '$this->date_em',
                    photo = '$this->photo',
                    address = '$this->address',
                    departement = '$this->departements',
                    fonction = '$this->fonction',
                    post = '$this->post',
                    burreaux = '$this->bureaux',
                    phone_portable = '$this->phone_portable',
                    phone_extenstion = '$this->phone_extenstion',
                    phone_fix = '$this->phone_fix' WHERE  matricule = '$this->old_mat';
                ";
                $this->query;
                $this->con->query($this->query);
                header("Location:index.php?success=Modifier Success !");
                
        }
                        

    }
  
$employee = new Employee(
                        $matricule,$firstname,$lastname,$photo,
                        $email,$username,$password,$cin,
                        $date_em,$departements,$bureaux,$post,$fonction,$address,$phone_portable,
                        $numero_extenstion,$numero_fix,$old_mat
                    );
                    

if(isset($_POST['add'])){
    $employee->create_new_recode();
}

if(isset($_POST['edit'])){
    $employee->edit_recorde();
}


?>