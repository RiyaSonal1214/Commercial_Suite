
		
		$sqr=mysqli_query($con,"SELECT * FROM booking WHERE date(book_for)='$date' and ('$ftime' < from_time and '$ttime' <= from_time) or  date(book_for)='$date' and ('$ftime' >= to_time and '$ttime' > to_time)");
		$row=mysqli_num_rows($sqr);
		if($row > 0)
		{
		echo true;
		}else if($row <= 0)
		{
			echo false;
		}