<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>feedback</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        .main{
    box-shadow: inset 8px 3px 18px -4px rgba(0, 0, 0, 0.4);
    background: rgba(5, 9, 9, 0.8) url("img/back1.jpg");
    background-size: cover;
  background-attachment: fixed;
  background-position: center;
  background-blend-mode: overlay;
}

        .header {
            overflow: hidden;
            
            padding: 20px 10px;
        }

        .header a {
            float: left;
            color:white;
            text-align: center;
            padding: 12px;
            text-decoration: none;
            font-size: 18px;
            line-height: 25px;
            border-radius: 4px;
            margin-left: 3px;
            margin-left: 5px;
        }

        .header img {
           width: 90px;
           height: 50px;
        }

        .header a:hover {
          background-color:orange;
            color:white;
        }

        .header a.active {
          background-color:orange;
            color: white;
        }

        .header-right {
            float: right;
        }

        @media screen and (max-width: 500px) {
            .header a {
                float: none;
                display: block;
                text-align: left;
            }

            .header-right {
                float: none;
            }
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            color: white;
        }

        h2 {
            font-size: 30px;
            text-align: center;
            background-color:orange;
            color: white;
            font-weight: bold;
            padding: 10px;
            margin-top: 0;
        }

        .action-link {
            display: inline-block;
            padding: 8px 16px;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-right: 10px;
            transition: background-color 0.3s;
        }

        .delete-link {
            background-color: #f44336;
        }

        .delete-link:hover {
            background-color: #d32f2f;
        }

        .update-link {
          background-color: #4CAF50;
        }

        .update-link:hover {
          background-color:darkgreen;
        }
        .back-button {
     text-decoration: none;
     color: white 
     font-size: 16px;
     padding: 10px;
     background-color: orange;
 }
 
 .back-button:hover {
     text-decoration:none;
     background-color: darkorange;
 }
    </style>
</head>
<body class="main">


<div class="header">
<img src="img/logo1.jpg" ></a>
    <div class="header-right">
        <a class="active" href="index.php">Home</a>
     
        <a onclick="history.back()" class="back-button">&#9664; Back</a><br><br>
      
    </div>
</div>

<h2>User Feedback</h2>

<table>
    <tr>
        <th>S.No</th>
        <th>Name</th>
        
        <th>feedback</th>
        
    </tr>
    <?php
    include("connection.php");
    $query = "SELECT * FROM contact";
    $result = mysqli_query($conn, $query);
    $sno = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $sno++;
        echo "<tr>
                <td>$sno</td>
                <td>{$row['uname']}</td>
               
                <td>{$row['feedback']}</td>
              
              </tr>";
    }
    ?>
</table>

</body>
</html>
