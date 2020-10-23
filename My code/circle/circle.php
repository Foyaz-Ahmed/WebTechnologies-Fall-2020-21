 <head>
	<title>Php first Exercise</title>
 </head>
 
 <body>
 
  <h1>Area of circle:-> </h1>
  <?php 
 
   class MyCircle {
	   public $radius;
	   
	  public function _construct($radius =1)
	   
	   {
		   $this->radius = radius;
	   }
	  public function _destruct()
	   {
		   echo "destroy constructor";
	   }
	  public function setRadius($radius)
	   {
		   $this->radius = $radius;
	   }
	   
	   function getRadius()
	   {
		   return $this->radius;
	   }
	   function getArea()
	   {
		   $area = 3.14*$this->radius*$this->radius;
		   return $area;
	   }
   }
   
  $mc = new  MyCircle(1);
  $mc->setRadius(2);
  echo $mc->getArea();

  ?>
 
 </body>

</html>