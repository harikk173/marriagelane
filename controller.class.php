<?php 
//Admin controller

require_once 'database.class.php';

class AdminController extends Database {
	
	//checking the login status
	public function check_log() {
		if (isset($_SESSION['admin'])) {
			return true;
		}
		else {
			header("Location:http://marriagelane.local/login");
		}
	}

	public function homepage(){

		//login and homepage
		if (isset($_SESSION['admin'])){
			$candidates = $this->get_all_candidates();
			require 'homepage.tpl.php';
		}
		elseif (isset($_SESSION['user'])){
			header("Location:http://marriagelane.local/add");
		}
		else {
			require 'login.tpl.php';
		}
	}

	public function login(){
        $password = sha1($_POST['password']);
        $arr = array(':username'=>$_POST['user'],':password'=>$password);

        $query = "SELECT * FROM `admin_users` WHERE username=:username AND password=:password";
        $result = $this->query_execute($query,$arr);
        $results = $result[0];
		$_SESSION['id'] = $results['id'];
		if($results['name'] == 'Administrator')
		{
			$_SESSION['admin'] = $results['name'];
		}
		else
		{
			$_SESSION['user'] = $results['name'];
		}
        header("Location:http://marriagelane.local/");
	}

	public function logout(){

		//admin logout
		session_destroy();
		header('Location:http://marriagelane.local/'); 
	}

	public function get_all_candidates(){
		$query = "SELECT * FROM `candidates`";
		$result = $this->query_execute($query, $arr);
		return $result;
	}
	public function profile(){
		$query = "SELECT * FROM `candidates` as `c` JOIN `other_det` as `o` ON c.id=o.userid WHERE c.id=:userid";
		$arr = array(
			':userid' => $_GET['pid'],
		);
		$results = $this->query_execute($query,$arr);
		require 'profile.tpl.php';
	}
	public function insert() {
		$query = "INSERT INTO `candidates`(`name`, `email`, `phone`, `address`, `dob`, `age`, `sex`, `religion`) VALUES (:name,:email,:phone,:address,:dob,:age,:sex,:religion)";
		$arr = array(
			':name' => $_POST['name'],
			':email' => $_POST['email'],
			':phone' => $_POST['phone'],
			':address' => $_POST['address'],
			':dob' => $_POST['dob'],
			':age' => $_POST['age'],
			':sex' => $_POST['sex'],
			':religion' => $_POST['religion'],
		);
		$result = $this->query_execute($query,$arr);
		$id = $this->lastId;
		$query = "INSERT INTO `other_det`(`userid`, `star`, `shishtadhasa`, `height`, `color`, `bgroup`, `body_type`, `other_health_det`, `educational`, `job`, `horscop_simlr`, `economical`, `horscop_status`, `fathername`, `father_occupation`, `salary`, `mothername`, `motheraddr`, `no_br`, `no_sis`,`kuripp`, `kuripp_time`) VALUES (:userid,:star,:shishtadhasa,:height,:color,:bgroup,:body_type,:other_health_det,:educational,:job,:horscop_simlr,:economical,:horscop_status,:fathername,:father_occupation,:salary,:mothername,:motheraddr,:no_br,:no_sis,:kuripp,:kuripp_time)";
		$arr = array(
			':userid' => $id,
			':star' => $_POST['star'],
			':shishtadhasa' => $_POST['shishtadhasa'],
			':height' => $_POST['height'],
			':color' => $_POST['color'],
			':bgroup' => $_POST['bgroup'],
			':body_type' => $_POST['body_type'],
			':other_health_det' => $_POST['other_health_det'],
			':educational' => $_POST['educational'],
			':job' => $_POST['job'],
			':horscop_simlr' => $_POST['horscop_simlr'],
			':economical' => $_POST['economical'],
			':horscop_status' => $_POST['horscop_status'],
			':fathername' => $_POST['father_occupation'],
			':father_occupation' => $_POST['father_occupation'],
			':salary' => $_POST['salary'],
			':mothername' => $_POST['mothername'],
			':motheraddr' => $_POST['motheraddr'],
			':no_br' => $_POST['no_br'],
			':no_sis' => $_POST['no_sis'],
			':kuripp' => NULL,
			':kuripp_time' => $_POST['kuripp_time'],
		);
		$result = $this->query_execute($query,$arr);
		$id = $this->lastId;
		$this->upload_img();
		header("Location:http://marriagelane.local/");
	}
	public function upload_img() {
        
        $target_dir = "upload/";
        $target_file = $target_dir.$this->id."_".basename($_FILES["fileToUpload"]["name"]);
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        $uploadOk = 1;

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file siz
        if ($_FILES["fileToUpload"]["size"] > 1000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg") {
            echo "Sorry, only PDF files are allowed.";
            echo $imageFileType;
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file)) {
                echo "The file ".basename($_FILES["fileToUpload"]["name"])."has been uploaded";
                $query = "UPDATE other_det SET kuripp = :target_file WHERE id = :id";
                $values = array(':id' => $this->id,
                                ':target_file' => $target_file);
                $this->query_execute($query,$values);  
            // $result = $link->prepare("UPDATE login SET photo = :target_file WHERE id = :id");
            //return $target_file;
            } else {
                echo "Error";
                return null;
            }
        }
	}
	public function insert_people() {
		$query = "INSERT INTO `candidates`(`name`, `email`, `phone`, `address`, `dob`, `age`, `sex`, `religion`) VALUES (:name,:email,:phone,:address,:dob,:age,:sex)";
		$arr = array(
			':name' => $_POST['name'],
			':email' => $_POST['email'],
			':phone' => $_POST['phone'],
			':address' => $_POST['address'],
			':dob' => $_POST['age'],
			':sex' => $_POST['sex'],
			':religion' => $_POST['religion'],
		);
		$result = $this->query_execute($query,$arr);
		$id = $this->lastId;
		$query = "UPDATE `other_det` SET `star`=:star,`shishtadhasa`=:shishtadhasa,`height`=:height,`color`=:color,`bgroup`=:bgroup,`body_type`=:body_type,`other_health_det`=:other_health_det,`educational`=:educational,`job`=:job,`horscop_simlr`=:horscop_simlr,`economical`=:economical,`horscop_status`=:horscop_status,`fathername`=:fathername,`father_occupation`=:father_occupation,`salary`=:salary,`mothername`=:mothername,`motheraddr`=:motheraddr,`no_br`=:no_br,`no_sis`=:no_sis,`kuripp_time`=:kuripp_time WHERE `userid`=:userid";
		$arr = array(
			':userid' => $id,
			':star' => $_POST['star'],
			':shishtadhasha' => $_POST['shishtadhasha'],
			':height' => $_POST['height'],
			':color' => $_POST['color'],
			':bgroup' => $_POST['bgroup'],
			':body_type' => $_POST['body_type'],
			':other_health_det' => $_POST['other_health_det'],
			':educational' => $_POST['educational'],
			':job' => $_POST['job'],
			':horscop_simlr' => $_POST['horscop_simlr'],
			':economical' => $_POST['economical'],
			':horscp_status' => $_POST['horscp_status'],
			':fathername' => $_POST['father_occupation'],
			':salary' => $_POST['salary'],
			':mothername' => $_POST['mothername'],
			':matheraddr' => $_POST['matheraddr'],
			':no_br' => $_POST['no_br'],
			':no_sis' => $_POST['no_sis'],
			':kuripp_time' => $_POST['kuripp_time'],
		);
		$result = $this->query_execute($query,$arr);
		$this->upload_img();
		header("Location:http://marriagelane.local/");
	}

	public function filter(){
		require_once 'filterpeople.tpl.php';
	}
	public function filtered(){
		$query = "SELECT * FROM `candidates` as `c` JOIN `other_det` as `o` ON c.id=o.userid WHERE c.sex=:sex AND c.age=:age AND c.religion=:religion AND o.star=:star AND o.horscop_simlr=:Jathakam AND o.horscop_status=:horscop_status AND o.economical=:economical";
		$arr = array(
			':star' => $_POST['star'],
			':age' => $_POST['age'],
			':religion' => $_POST['caste'],
			':star' => $_POST['star'],
			':Jathakam' => $_POST['Jathakam'],
			':economical' => $_POST['economical'],
			':horscop_status' => $_POST['horscop_status']
		);
		$result = $this->query_execute($query, $arr);
		return $result;
	}	
}