<?php 

$server = "localhost";
$username = "root";
$password = "";
$db = "medical_pro";

$conn = mysqli_connect($server,$username,$password,$db);

if(!$conn)
{
    echo "Error In Connection : ".mysqli_connect_error();
    return false;
}

// insert new record 
function db_insert($sql)
{
    global $conn;
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        return "Added Success";
    }
    return false;
}

function getRow($table,$field,$value)
{
    global $conn;
    $sql = "SELECT * FROM `$table` WHERE `$field`='$value' ";
    $result = mysqli_query($conn,$sql);
    if(!$result)
    {
        echo mysqli_error($conn);
    }
    $rows = [];
    if(mysqli_num_rows($result) > 0)
    {
        $rows[] = mysqli_fetch_assoc($result);
    }
    if(count($rows)>0)
    {
        return $rows[0];
    }
    else 
    {
        return false;
    }
}

function getRows($table)
{
    global $conn;
    $sql = "SELECT * FROM `$table` ";
    
    $result = mysqli_query($conn, $sql);
    if(!$result)
    {
        echo mysqli_error($conn);
    }
    $rows = [];
    if(mysqli_num_rows($result) > 0)
    {
        while ($row = mysqli_fetch_assoc($result)) 
        {
            $rows[] = $row;
        }
    }
   return $rows;
}
// update existing record 

function db_update($sql)
{
    global $conn;
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        return "Updated Success";
    }
    return false;
}

function deleterow($sql)
{
    global $conn;
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        return "Deleted Success";
    }
    return false;
}
// count of records
function count_table($table)
{
    global $conn;
    $sql = "SELECT * FROM `$table` ";
    
    $result = mysqli_query($conn, $sql);
    if(!$result)
    {
        echo mysqli_error($conn);
    }
    $rows = [];
    if(mysqli_num_rows($result) > 0)
    {
        while ($row = mysqli_fetch_assoc($result)) 
        {
            $rows[] = $row;
        }
    }
   return count($rows);
}





