<?php

class MaxMembersException extends Exception{
    public static function TooManyMembers(){
        return new static ('You can add only three members! Domain specific');
    }
}

   function add( $one, $two){

       if(!is_float($one) || !is_float($two)){
           throw  new InvalidArgumentException('Please provide a valid type of argument.');
       }
       return $one+$two;
   }
//
//   try{
//   echo add(2,[12,2]);
//}catch (Exception $exception){
//       echo 'Ohhh well';
//   }

   class Video{

   }
   class User{


       public function download(Video $video){
        if(!$this->subscribed()) throw new Exception('You must be logged in to download a video');
       }

       public function subscribed(){
           return false;
       }
   }


//   (new User())->download(new Video());


    class Member{

       private $name;
   public function __construct($name)
   {
       $this->name=$name;
   }
    }


    //suppose you can add only three members
    class Team{
       private $members=[];

       public function add(Member $member){
           if(count($this->members)===3){
               throw  MaxMembersException::TooManyMembers();
           }
           $this->members[]=$member;
       }

        /**
         * @return mixed
         */
        public function getMembers()
        {
            return $this->members;
        }
    }

    class TeamController{

    public function store(){
        try{
            $team=  new Team;

            $team->add(new Member('John'));
            $team->add(new Member('Alex'));
            $team->add(new Member('Dan'));
            $team->add(new Member('Johny Bravo'));
            $team->add(new Member('John'));
        }catch (MaxMembersException $exception){
            var_dump($exception->getMessage());
        }
    }
    }



echo '<pre>';
(new TeamController)->store();

