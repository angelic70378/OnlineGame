<?php
$me = $_POST['love_you'];
$com = rand(0,2); 
if ($me == "0")
{
    if ($com == "0")
    {
       echo "<table width=\"100%\">\n";
       echo "<tr>\n";
       echo "<td align=\"left\">\n";
       echo "    <img src=\"mypic/left_scissor.png\">\n";
       echo "</td>\n";
     echo "<td align=\"center\">\n";
     echo "    <font style=\"font-family:arial;color:red;font-size:70px;\">\n";
     echo "        <b>DRAW</b>\n";
     echo "    </font>\n";
     echo "</td>\n";
       echo "<td align=\"right\">\n";
       echo "    <img src=\"mypic/right_scissor.png\">\n";
       echo "</td>\n";
       echo "</tr>\n";
       echo "</table>\n<br>\n";
    }
    elseif ($com == "1")
    {
       echo "<table width=\"100%\">\n";
       echo "<tr>\n";
       echo "<td align=\"left\">\n";
       echo "    <img src=\"mypic/left_scissor.png\">\n";
       echo "</td>\n";
     echo "<td align=\"center\">\n";
     echo "    <font style=\"font-family:arial;color:red;font-size:70px;\">\n";
     echo "        <b>COM<BR>WIN !</b>\n";
     echo "    </font>\n";
     echo "</td>\n";
       echo "<td align=\"right\">\n";
       echo "    <img src=\"mypic/right_rock.png\">\n";
       echo "</td>\n";
       echo "</tr>\n";
       echo "</table>\n<br>\n";
    }
    elseif ($com == "2")
    {
       echo "<table width=\"100%\">\n";
       echo "<tr>\n";
       echo "<td align=\"left\">\n";
       echo "    <img src=\"mypic/left_scissor.png\">\n";
       echo "</td>\n";
     echo "<td align=\"center\">\n";
     echo "    <font style=\"font-family:arial;color:blue;font-size:70px;\">\n";
     echo "        <b>YOUR<BR>WIN !</b>\n";
     echo "    </font>\n";
     echo "</td>\n";
       echo "<td align=\"right\">\n";
       echo "    <img src=\"mypic/right_paper.png\">\n";
       echo "</td>\n";
       echo "</tr>\n";
       echo "</table>\n<br>\n";
    }
}
elseif ($me == "1")
{
    if ($com == "0")
    {
       echo "<table width=\"100%\">\n";
       echo "<tr>\n";
       echo "<td align=\"left\">\n";
       echo "    <img src=\"mypic/left_rock.png\">\n";
       echo "</td>\n";
     echo "<td align=\"center\">\n";
     echo "    <font style=\"font-family:arial;color:blue;font-size:70px;\">\n";
     echo "        <b>YOUR<BR>WIN !</b>\n";
     echo "    </font>\n";
     echo "</td>\n";
       echo "<td align=\"right\">\n";
       echo "    <img src=\"mypic/right_scissor.png\">\n";
       echo "</td>\n";
       echo "</tr>\n";
       echo "</table>\n<br>\n";
    }
    elseif ($com == "1")
    {
       echo "<table width=\"100%\">\n";
       echo "<tr>\n";
       echo "<td align=\"left\">\n";
       echo "    <img src=\"mypic/left_rock.png\">\n";
       echo "</td>\n";
     echo "<td align=\"center\">\n";
     echo "    <font style=\"font-family:arial;color:red;font-size:70px;\">\n";
     echo "        <b>DRAW</b>\n";
     echo "    </font>\n";
     echo "</td>\n";
       echo "<td align=\"right\">\n";
       echo "    <img src=\"mypic/right_rock.png\">\n";
       echo "</td>\n";
       echo "</tr>\n";
       echo "</table>\n<br>\n";
    }
    elseif ($com == "2")
    {
       echo "<table width=\"100%\">\n";
       echo "<tr>\n";
       echo "<td align=\"left\">\n";
       echo "    <img src=\"mypic/left_rock.png\">\n";
       echo "</td>\n";
     echo "<td align=\"center\">\n";
     echo "    <font style=\"font-family:arial;color:red;font-size:70px;\">\n";
     echo "        <b>COM<BR>WIN !</b>\n";
     echo "    </font>\n";
     echo "</td>\n";
       echo "<td align=\"right\">\n";
       echo "    <img src=\"mypic/right_paper.png\">\n";
       echo "</td>\n";
       echo "</tr>\n";
       echo "</table>\n<br>\n";
    }
}
elseif ($me == "2")
{
    if ($com == "0")
    {
       echo "<table width=\"100%\">\n";
       echo "<tr>\n";
       echo "<td align=\"left\">\n";
       echo "    <img src=\"mypic/left_paper.png\">\n";
       echo "</td>\n";
     echo "<td align=\"center\">\n";
     echo "    <font style=\"font-family:arial;color:red;font-size:70px;\">\n";
     echo "        <b>COM<BR>WIN !</b>\n";
     echo "    </font>\n";
     echo "</td>\n";
       echo "<td align=\"right\">\n";
       echo "    <img src=\"mypic/right_scissor.png\">\n";
       echo "</td>\n";
       echo "</tr>\n";
       echo "</table>\n<br>\n";
    }
    elseif ($com == "1")
    {
       echo "<table width=\"100%\">\n";
       echo "<tr>\n";
       echo "<td align=\"left\">\n";
       echo "    <img src=\"mypic/left_paper.png\">\n";
       echo "</td>\n";
     echo "<td align=\"center\">\n";
     echo "    <font style=\"font-family:arial;color:blue;font-size:70px;\">\n";
     echo "        <b>YOUR<BR>WIN !</b>\n";
     echo "    </font>\n";
     echo "</td>\n";
       echo "<td align=\"right\">\n";
       echo "    <img src=\"mypic/right_rock.png\">\n";
       echo "</td>\n";
       echo "</tr>\n";
       echo "</table>\n<br>\n";
    }
    elseif ($com == "2")
    {
       echo "<table width=\"100%\">\n";
       echo "<tr>\n";
       echo "<td align=\"left\">\n";
       echo "    <img src=\"mypic/left_paper.png\">\n";
       echo "</td>\n";
     echo "<td align=\"center\">\n";
     echo "    <font style=\"font-family:arial;color:red;font-size:70px;\">\n";
     echo "        <b>DRAW</b>\n";
     echo "    </font>\n";
     echo "</td>\n";
       echo "<td align=\"right\">\n";
       echo "    <img src=\"mypic/right_paper.png\">\n";
       echo "</td>\n";
       echo "</tr>\n";
       echo "</table>\n<br>\n";
    }
}
else
{
   if ($_POST['who']=="are_you")
   {
   echo "    <font style=\"font-family:arial;color:red;font-size:70px;\">\n";
   echo "        <b>:(</b>\n";
   echo "    </font>\n";
   }
$err = "on";
}
if($err==NULL)
{
  echo "<table width=\"100%\">\n";
  echo "<tr>\n";
  echo "<td align=\"left\">\n";
  echo "    <font style=\"font-family:arial;color:black;font-size:40px;\">\n";
  echo "        <b>YOU</b>\n";
  echo "    </font>\n";
  echo "</td>\n";
  echo "<td align=\"right\">\n";
  echo "    <br>\n";
  echo "    <font style=\"font-family:arial;color:black;font-size:40px;\">\n";
  echo "        <b>COM</b>\n";
  echo "    </font>\n";
  echo "</td>\n";
  echo "</tr>\n";
  echo "</table>\n";
}
else
{
  $err=NULL;
}
?>
