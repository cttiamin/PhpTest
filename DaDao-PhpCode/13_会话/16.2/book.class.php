<?php
	class book{
		private $book_number;	//�鼮���
		private $book_name;	//�鼮��
		private $book_price;	//�鼮�۸�
		private $book_author; 	//�鼮����
		
		public function getbook_author(){
			return $this->book_author;
		}
		public function setbook_author($book_author){
			$this->book_author=$book_author;
		}
		public function getbook_price(){
			return $this->book_price;
		}
		public function setbook_price($book_price){
			$this->book_price=$book_price;
		}
		public function getbook_name(){
			return $this->book_name;
		}
		public function setbook_name($book_name){
			$this->book_name=$book_name;
		}
		public function getbook_number(){
			return $this->book_number;
		}
		public function setbook_number($book_number){
			$this->book_number=$book_number;
		}
	}
?>
