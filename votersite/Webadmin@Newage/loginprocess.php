<?php 
include("database/db.php");
include("session/session.php");

$uname = trim($_POST['txtusername']);
$pwd = trim($_POST['txtpassword']);

// Prepare a SQL statement to prevent SQL injection
$stmt = $conn->prepare("SELECT * FROM `admin_login` WHERE `username` = ?");
$stmt->bind_param("s", $uname);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $dbuname = $row['username'];
    $dbpwd = $row['password']; // This is the plain-text password from the database
    $name = $row['Name'];

    // Check if the stored password is hashed or not
    if (password_needs_rehash($dbpwd, PASSWORD_DEFAULT)) {
        // If it's plain text (not hashed), check if the plain-text password matches
        if ($dbpwd === $pwd) {
            // Password matches, so hash the password and update the database
            $new_hashed_password = password_hash($pwd, PASSWORD_DEFAULT);
            
            // Update the database with the hashed password
            $update_stmt = $conn->prepare("UPDATE `admin_login` SET `password` = ? WHERE `username` = ?");
            $update_stmt->bind_param("ss", $new_hashed_password, $uname);
            $update_stmt->execute();
            
            // Continue login process
            $_SESSION['user'] = $dbuname;
            $_SESSION['login'] = 1;
            $_SESSION['adminname'] = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
            header("Location: dashboard/home.php");
            exit();
        } else {
            // Incorrect plain-text password
            $_SESSION['login'] = 0;
            $_SESSION['nologin'] = 1;
            header("Location: index.php");
            exit();
        }
    } else {
        // Password is already hashed, verify using password_verify()
        if (password_verify($pwd, $dbpwd)) {
            $_SESSION['user'] = $dbuname;
            $_SESSION['login'] = 1;
            $_SESSION['adminname'] = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
            header("Location: dashboard/home.php");
            exit();
        } else {
            // Incorrect password
            $_SESSION['login'] = 0;
            $_SESSION['nologin'] = 1;
            header("Location: index.php");
            exit();
        }
    }
} else {
    // Username not found
    $_SESSION['nologin'] = 1;
    $_SESSION['login'] = 0;
    header("Location: index.php");
    exit();
}

// Close statement
$stmt->close();
$conn->close();
?>


<?php 
// include("database/db.php");
// include("session/session.php");

// $uname = trim($_POST['txtusername']);
// $pwd = trim($_POST['txtpassword']);

// // Prepare a SQL statement to prevent SQL injection
// $stmt = $conn->prepare("SELECT * FROM `admin_login` WHERE `username` = ?");
// $stmt->bind_param("s", $uname);
// $stmt->execute();
// $result = $stmt->get_result();

// if ($result->num_rows == 1) {
//     $row = $result->fetch_assoc();
//     $dbuname = $row['username'];
//     $dbpwd = $row['password']; // This is the plain-text password from the database
//     $name = $row['Name'];

//     // Check if the stored password is hashed or not
//     if (password_needs_rehash($dbpwd, PASSWORD_DEFAULT)) {
//         // If it's plain text (not hashed), check if the plain-text password matches
//         if ($dbpwd === $pwd) {
//             // Password matches, so hash the password and update the database
//             $new_hashed_password = password_hash($pwd, PASSWORD_DEFAULT);
            
//             // Update the database with the hashed password
//             $update_stmt = $conn->prepare("UPDATE `admin_login` SET `password` = ? WHERE `username` = ?");
//             $update_stmt->bind_param("ss", $new_hashed_password, $uname);
//             $update_stmt->execute();
            
//             // Continue login process
//             $_SESSION['user'] = $dbuname;
//             $_SESSION['login'] = 1;
//             $_SESSION['adminname'] = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
//             echo "<script>location='dashboard/home.php'</script>";
//         } else {
//             // Incorrect plain-text password
//             $_SESSION['login'] = 0;
//             $_SESSION['nologin'] = 1;
//             echo "<script>location='index.php'</script>";
//         }
//     } else {
//         // Password is already hashed, verify using password_verify()
//         if (password_verify($pwd, $dbpwd)) {
//             $_SESSION['user'] = $dbuname;
//             $_SESSION['login'] = 1;
//             $_SESSION['adminname'] = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
//             echo "<script>location='dashboard/home.php'</script>";
//         } else {
//             // Incorrect password
//             $_SESSION['login'] = 0;
//             $_SESSION['nologin'] = 1;
//             echo "<script>location='index.php'</script>";
//         }
//     }
// } else {
//     // Username not found
//     $_SESSION['nologin'] = 1;
//     $_SESSION['login'] = 0;
//     echo "<script>location='index.php'</script>";
// }

// // Close statement
// $stmt->close();
// $conn->close();
?>
