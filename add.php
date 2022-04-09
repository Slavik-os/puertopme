
<?php
     ob_start();
     if(isset($_POST['submit_demand'])) {
        include('home.php');
        } else {
            include('index.php');
        }
    // error_reporting(0);
     require ('inc/config.php');

     
   // Upload image :
   $target_dir = "uploads/";
   $target_file = "uploads/" . basename($_FILES["fileToUpload"]["name"]);
   $uploadOk = 1;
   $allowed = ['jpeg','jpg','gif','png'];
   $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
   if(isset($_POST['submit'])){
       $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
       if($check) {
           $uploadOK =1;
       }else {
           if ($target_file == $target_dir){
               $target_file = 'uploads/30728892_2124503501119323_4434534100824489984_n.png';
               header("Location:index.php?success=Modifier Success !");
           }
       }
       if(!in_array($imageFileType,$allowed)){
           if ($target_file == $target_dir) {
            $target_file = 'uploads/30728892_2124503501119323_4434534100824489984_n.png';
            header("Location:index.php?success=Modifier Success !");
                die();
           } else{
        
           header("Location:index.php?submit=seuls les fichiers JPG, JPEG, PNG et GIF sont autorisés.");
           $uploadOK =0;
           die();
                }  
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
   echo (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file));
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
    $old_f_name = mysqli_real_escape_string($con,$_POST['old_name']);
    $mat_delete = mysqli_real_escape_string($con,$_POST['delete']);
    
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
         public $mat_delete ;
         private $con;
        function __construct(
                            $matricule,$firstname,$lastname,$photo,$email,
                            $username,$password,$cin,$date_em,$departements,$bureaux,$post,
                            $fonction,$address,$phone_portable,$phone_extenstion,
                            $phone_fix,$old_mat,$old_f_name,$mat_delete)
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
                                $this->old_f_name = $old_f_name;
                                $this-> mat_delete = $mat_delete;
                                $this->con=mysqli_connect("localhost","root","nomads","puerto_dbs"); // reconnect via oop
                                if($this->date_em == ''){
                                    $this->date_em = '0000-00-00';
                                }else{
                                    $this->date_em = $this->date_em;
                                }
                            }
        public function check_for_dup($check,$string,$message){
            $this->query="SELECT $check FROM employes_tbl WHERE $check = '$string'";
            $this->result =  mysqli_query($this->con,$this->query);
            $this->row = mysqli_fetch_array($this->result);
            if ($this->row !=Null){
                array_push($this->listOfErrors,$message);
            }
        }
        public function check_empty($string){
            if(empty($string)){
                return '.....';
            }else {
                return $string;
            }
        }
        function create_new_recode(){
            // check if duplication exists :

            $this->check_for_dup('matricule',$this->matricule,'Matricule');
            $this->check_for_dup('cin',$this->cin,'cin');
            $this->check_for_dup('email',$this->email,'email');
            $this->bureaux = $this->check_empty($this->bureaux);
            $this->post = $this->check_empty($this->post);
            $this->fonction = $this->check_empty($this->fonction);
            $this->phone_extenstion = $this->check_empty($this->phone_extenstion);
            $this->phone_fix = $this->check_empty($this->phone_fix);
            $this->address = $this->check_empty($this->address);

           
            if($this->photo=='uploads/'){
                $this->photo='uploads/default-user-icon-13.jpeg';
            }
            $this->phone_portable = $this->check_empty($this->phone_portable);
           if(sizeof($this->listOfErrors) === 0 ){
            $this->query ="DROP TABLE IF EXISTS puerto_dbs.departments ;
            CREATE TABLE departments( SELECT id,firstName,lastName,departement 
            FROM employes_tbl WHERE role='responsable');
            ";
            $this->con->query($this->query);
                
               $this->query=("INSERT INTO employes_tbl(
                matricule,firstName,lastname,photo,email,password,
                cin,date_em,departement,burreaux,post,fonction,address,
                phone_portable,phone_extenstion,phone_fix,role)
                VALUES(
                    '$this->matricule','$this->firstname','$this->lastname','$this->photo','$this->email',
                    '".md5($this->password)."','$this->cin'
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
            // Update departements  ;
                $this->query ="DROP TABLE IF EXISTS puerto_dbs.departments ;
                CREATE TABLE departments( SELECT id,firstName,lastName,departement 
                FROM employes_tbl WHERE role='responsable');
                ";
                 // update responsable name in permissions if edited 
                 $this->sql = "SELECT role from employes_tbl WHERE matricule = '$this->old_mat'";
                 $this->result = $this->con->query($this->sql);
                 while($row = mysqli_fetch_assoc($this->result)){
                     $check_if_resp = $row['role'];
                 }
                if ($check_if_resp == 'responsable'){
                 $sql = "
                 UPDATE permissions SET responsable_depar ='$this->firstname' WHERE  responsable_depar ='$this->old_f_name'
                 ";
                 $this->con->query($sql);
                }
                
                $this->con->query($this->query);
                if ($_SESSION['departement'] == 'IT'){
                $this->query = "UPDATE employes_tbl SET
                    matricule = '$this->matricule',
                    firstName = '$this->firstname',
                    lastname  = '$this->lastname',
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
                }
                else {
                    $this->query = "UPDATE employes_tbl SET
                    matricule = '$this->matricule',
                    firstName = '$this->firstname',
                    lastname  = '$this->lastname',
                    email = '$this->email',
                    photo = '$this->photo',
                    address = '$this->address',
                    departement = '$this->departements' WHERE matricule= '$this->old_mat';
                ";

                }
                $this->query;
                // echo 'HHHHHHHHHHHHHHHHHHHHHHHHHHHHHHH '.$this->query;
                $this->con->query($this->query);
                header("Location:index.php?success=Modifier Success !");
            
                
        }
        
        function delete_recorde($mat_delete){
               $this->mat_delete = $mat_delete;
               $this->query = "SELECT role FROM employes_tbl WHERE matricule='$this->mat_delete'
               and role='responsable'";
               $this->result =  mysqli_query($this->con,$this->query);
               $this->row = mysqli_fetch_array($this->result);
               if ($this->row ==Null){
                $this->query = "DELETE FROM employes_tbl WHERE matricule = '$this->mat_delete'";
                $this->con->query($this->query);
                header("Location:index.php?success=Modifier Success !");
                echo $this->query;
                
               }else{
                 header("Location:index.php?submit=Vous peuvez pas supprimer un responsable!");
                die();
            }
        }             
    }



  
$employee = new Employee(
                        $matricule,$firstname,$lastname,$photo,
                        $email,$username,$password,$cin,
                        $date_em,$departements,$bureaux,$post,$fonction,$address,$phone_portable,
                        $numero_extenstion,$numero_fix,$old_mat,$old_f_name,$mat_delete
                    );
                    

if(isset($_POST['add'])){
    $employee->create_new_recode();
}

if(isset($_POST['edit'])){
    $employee->edit_recorde();
}
if(isset($_POST['delete'])){
    $employee->delete_recorde($_POST['delete']);
}



class Congee {
    public $type_demand;
    public $type ;
    public $employee_id;
    public $matricule;
    public $firstName;
    public $lastname;
    public $responsable_id;
    public $departement ;
    public $date_start;
    public $date_end;
    public $replacement;
    public $justification;
    public $created_date;
    function __construct(
                        $type_demand,$type,$matricule,$firstName,$lastname,$employee_id,$responsable_id,
                        $departement,$date_start,$date_end,$replacement,
                        $justification,$taken_dayes,$fonction,$created_date,
                        $heur_start,$heur_end,$person_replace
                        ) {
                        $this->fonction = $fonction;
                        $this->type_demand = $type_demand;
                        $this->type = $type;
                        $this->employee_id = $employee_id;
                        $this->matricule = $matricule;
                        $this->firstName = $firstName;
                        $this->lastname = $lastname;
                        $this->responsable_id = $responsable_id;
                        $this->departement = $departement;
                        $this->date_start = $date_start;
                        $this->date_end = $date_end ;
                        $this->replacement = $replacement;
                        $this->justification = $justification;
                        $this->taken_dayes = $taken_dayes;
                        $this->created_date = $created_date;
                        $this->heur_start = $heur_start;
                        $this->heur_end = $heur_end;
                        $this->con=mysqli_connect("localhost","root","nomads","puerto_dbs"); // reconnect via oop
                       

                        }
    function create_demand($type_d){
        $this->type_d = $type_d ;
        switch($this->type_d) {
            case "DEMAND DABSENCE.":    
            $this->query =("
            INSERT INTO demands (employee_id,responsable_id,matricule_employee,firstName,lastname,type_demand,departement,date_start,date_end,heur_start,heur_end,
            replacement,status,fonction,justification,created_date)VALUES(
            $this->employee_id,$this->responsable_id,'$this->matricule','$this->firstName','$this->lastname','$this->type_demand','$this->department',
            DATE_FORMAT('$this->date_start','%Y-%m-%d'),DATE_FORMAT('$this->date_end','%Y-%m-%d'),
            '$this->heur_start','$this->heur_end','$this->replacement',NUll,'$this->fonction','$this->justification',DATE_FORMAT('$this->created_date','%Y-%m-%d'));
                        
            ");
            $this->result =  mysqli_query($this->con,$this->query);
            header("Location:absence.php?submit=Envoye!");
            break;

            case "DEMANDE DE CONGE" :
                $this->query = ("
                INSERT INTO demands(employee_id,responsable_id,matricule_employee,firstName,lastName,conge_type,type_demand,departement,date_start,date_end,
                replacement,status,justification,fonction,created_date)
                VALUES(
                        $this->employee_id,$this->responsable_id,'$this->matricule','$this->firstName','$this->lastname','$this->type','$this->type_demand','$this->departement',
                        DATE_FORMAT('$this->date_start','%Y-%m-%d'),
                        DATE_FORMAT('$this->date_end','%Y-%m-%d'),
                        '$this->replacement',null,'$this->justification',
                        '$this->fonction',DATE_FORMAT('$this->created_date','%Y-%m-%d')
                );
            
            ");
            
            $this->result =  mysqli_query($this->con,$this->query);
           
            
            header("Location:conge.php?submit=Envoye!");
        
    }
        
    }

    function change_status($demand_id,$status,$comment,$depar){
       $this->demand_id=$demand_id;
       $this->status = $status;
       $this->comment = $comment;
       $this->depar = $depar;
       if ($depar=='RH'){
        $this->sql = "UPDATE demands SET status_rh = '$this->status' ,comment ='$this->comment'
        WHERE demands_id = $this->demand_id
       ";
    //    echo $this->sql;
       }else{
       $this->sql = "UPDATE demands SET status = '$this->status' ,comment ='$this->comment'
        WHERE demands_id = $this->demand_id
       ";
        }
       $this->result = mysqli_query($this->con,$this->sql);
       header_remove();
       header("Location:my_demands.php?changer=Changer");
   
}

function delete_demand($demand_id){
    $this->demand_id = $demand_id;
    $this->sql ="DELETE FROM demands where demands_id =$this->demand_id";
    $this->result = mysqli_query($this->con,$this->sql);
    header_remove();
    if ($_SESSION['role'] == ""){
        header("Location:home.php?submit=Suprimmer");
    }else{
    header("Location:my_demands.php?submit=Suprimmer");
    }
}

}



if(isset($_POST['submit_demand'])) {
    $type_demand = $_SESSION['demand'];
    $type = $_POST['flexRadioDefault'];
    $employee_id = $_SESSION['id'];
    $departement = $_SESSION['departement'];
    $date_start = $_POST['date_start'];
    $date_end = $_POST['date_end'];
    $replacement = $_POST['person_replace'];
    $justification = $_POST['justification'];
    $date1 = strtotime($date_start);
    $date2 = strtotime($date_end);
    $takenDays = date('d', $date2 - $date1);
    $fonction = $_SESSION['fonction'];
    $date_dabsence_s = $_POST['date_dabsence_s'];
    $date_dabsence_r = $_POST['date_dabsence_r'];
    $heur_start = $_POST['heur_start'];
    $heur_end  = $_POST['heur_end'];
    $person_replace = $_POST['person_replace'];

    // responsable id 
    $responsable_id= [];
    $sql = "SELECT id FROM departments WHERE departement ='$departement'";
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_assoc($result)){
       $responsable_id[] = $row;
    }
    $responsable_id = current($responsable_id)['id'];
    // end
    switch($type_demand){
        case "DEMANDE DE CONGE" :
        
            $conge = new Congee(
                $type_demand,$type,$_SESSION['matricule'],$_SESSION['firstName'],
                $_SESSION['lastname'],$_SESSION['id'],$responsable_id,
                $departement,$date_start,$date_end,$replacement,
                $justification,$takenDays,$fonction,date("Y-m-d"),
                Null,Null,Null,Null,Null
              );
              break;
              case "DEMAND D'ABSENCE.":
               $motif = $_POST['motif_dabsence'];
               $date_s = $_POST['date_dabsence_s'];
               $date_r = $_POST['date_dabsence_r'];
               $heur_s = $_POST['heur_start'];
               $heur_r = $_POST['heur_end'];
               $replacement = $_POST['person_replace'];
               $type_demand = 'DEMAND DABSENCE.';
               $conge = new Congee(
                $type_demand,$type,$_SESSION['matricule'],$_SESSION['firstName'],
                $_SESSION['lastname'],$_SESSION['id'],$responsable_id,
                $departement,$date_s,$date_r,$replacement,
                $motif,$takenDays,$fonction,date("Y-m-d"),
                $heur_s,$heur_r,$replacement

               );
            break;
            case "ORDRE DE MISSION":
                $conge = new Congee(
                    $type_demand,$type,$_SESSION['matricule'],$_SESSION['firstName'],
                    $_SESSION['lastname'],$_SESSION['id'],$responsable_id,
                    $departement,$date_start,$date_end,$replacement,
                    $justification,$takenDays,$fonction,date("Y-m-d"),
                    Null,Null,Null,Null,Null
                  );
            break;
    }
   
    $conge->create_demand($type_demand);

}
if(isset($_POST['change_status'])){
    $conge = new Congee(
        $type_demand,$type,$_SESSION['matricule'],$_SESSION['firstName'],
        $_SESSION['lastname'],$_SESSION['id'],$responsable_id,
        $departement,$date_start,$date_end,$replacement,
        $justification,$takenDays,$fonction,date("Y-m-d"),
        Null,Null,Null,Null,Null
      );
      $demand_id = $_POST['demands_id'];
      $conge->change_status($demand_id,$_POST['status'],$_POST['comment'],$_SESSION['departement']);
}

if(isset($_POST['deleted_demand'])){
    $conge = new Congee(
        $type_demand,$type,$_SESSION['matricule'],$_SESSION['firstName'],
        $_SESSION['lastname'],$_SESSION['id'],$responsable_id,
        $departement,$date_start,$date_end,$replacement,
        $justification,$takenDays,$fonction,date("Y-m-d"),
        Null,Null,Null,Null,Null
      );
      $conge->delete_demand($_POST['deleted_demand']);
}
?>
