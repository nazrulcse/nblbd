<?PHP
//session_start();
 require_once "SqlConnection.php";
/*--------------------------------------------------------------------------------------
@Desc       :   Simple and Cool Paging with PHP
@author     :   SachinKRaj - http://blog.sachinkraj.com
@updates    :   http://blog.sachinkraj.com/how-to-create-simple-paging-with-php-cs/
@Comments   :   If you like my work, please drop me a comment on the above post link. 
                Thanks!
---------------------------------------------------------------------------------------*/
$total_data_found=0;
function check_integer($which) {
        if(isset($_REQUEST[$which])){
            if (intval($_REQUEST[$which])>0) {
                //check the paging variable was set or not, 
                //if yes then return its number:
                //for example: ?page=5, then it will return 5 (integer)
                return intval($_REQUEST[$which]);
            } else {
                return false;
            }
        }
        return false;
    }//end of check_integer()

    function get_current_page() {
        if(($var=check_integer('page'))) {
            //return value of 'page', in support to above method
            return $var;
        } else {
            //return 1, if it wasnt set before, page=1
            return 1;
        }
    }//end of method get_current_page()
    function getResultSet($page_size, $thepage, $query_string,$count_query)
    {
        global $total_data_found;
        $current = get_current_page();
        $start_value=($current-1)*$page_size;
        $end_value=6;
        //$total_data_found=185;
        //echo "start: ".$start_value." end:".$end_value;


        //$resultPaging = $conn->select_data($my_query."  LIMIT $offset, $limit");
        $conn2=new SqlConnection();
        if($conn2->createConnection())
          {
		// echo $count_query;
          $result=$conn2->select_data($count_query);
		    
          $total_data_found = mysql_result($result, 0, "count_data");
		  
          //echo $total_data_found;
          if($total_data_found>0)
          {
             
			   $resultPaging = $conn2->select_data($query_string." LIMIT $start_value, $page_size");
              //$return_result=$conn->select_data($query_string);
          }

          }
          return $resultPaging;
    }
    function doPages($page_size, $thepage, $query_string) {
        
        //per page count
        global $total_data_found;
        $index_limit = 6;
        $total=$total_data_found;
        //set the query string to blank, then later attach it with $query_string
        $query='';
        
        if(strlen($query_string)>0){
            $query = "&amp;".$query_string;
        }
        
        //get the current page number example: 3, 4 etc: see above method description
        $current = get_current_page();
        
        $total_pages=ceil($total/$page_size);
        $start=max($current-intval($index_limit/2), 1);
        $end=$start+$index_limit-1;
        echo '<div class="paging2">';

        if($current==1) {
            //echo '<span class="prn">&lt; Previous</span>&nbsp;';
			echo '<span class="prn"></span>&nbsp;';
        } else {
            $i = $current-1;
            //echo '<a href="'.$thepage.'&page='.$i.$query.'" class="prn" rel="nofollow" title="go to page '.$i.'">&lt; Previous</a>&nbsp;';
            //echo '<span class="prn">...</span>&nbsp;';
			echo '<a href="'.$thepage.'&page='.$i.$query.'" class="prn" rel="nofollow" title="Go To Page '.$i.'"></a>&nbsp;';
            echo '<span class="prn"></span>';
        }

        if($start > 1) {
            $i = 1;
            echo '<a href="'.$thepage.'&page='.$i.$query.'" title="Go To Page '.$i.'">'.$i.'</a>&nbsp;';
        }

        for ($i = $start; $i <= $end && $i <= $total_pages; $i++){
            if($i==$current) {
                echo '<span style=" color:green; font-weight:bold;" >'.$i.'</span>&nbsp;';
            } else {
                echo '<a  href="'.$thepage.'&page='.$i.$query.'" title="Go To Page '.$i.'">'.$i.'</a>&nbsp;';
            }
        }

        if($total_pages > $end){
            $i = $total_pages;
            echo '<a href="'.$thepage.'&page='.$i.$query.'" title="Go To Page '.$i.'">'.$i.'</a>&nbsp;';
        }

        if($current < $total_pages) {
            $i = $current+1;
            echo '<span class="prn"></span>';
            echo '<a href="'.$thepage.'&page='.$i.$query.'" class="prn" rel="nofollow" title="Go To Page '.$i.'"></a>&nbsp;';
        } else {
            echo '<span class="prn"></span>';
        }
        
        echo "</div>";
        //if nothing passed to method or zero, then dont print result, else print the total count below:
       /* if ($total != 0){
            //prints the total result count just below the paging
            echo '<p id="total_count">(total '.$total.' results)</p></div>';
        }*/
        
    }//end of method doPages()
?>