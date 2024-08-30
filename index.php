<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Al Moungah Hospital</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/Janna LT Regular.ttf">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
</head>

<body>
    <div class="main">
        <div class="logo">
            <img src="images/hospital-logo.png" alt="Hospital Logo">
            <h1>مستشفى المناجاة</h1>
        </div>
        <div class="form-container">
            <p>أهلا بكم فى مستشفى المناجاة - للحجز املاء الاستمارة التالية:</p>
            <form action="process_booking.php" method="post">
                <div class="form-group">
                    <label for="name">أدخل الاسم</label>
                    <input type="text" id="name" name="name" value="<?php echo isset($pName) ? htmlspecialchars($pName) : ''; ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">أدخل البريد الالكترونى</label>
                    <input type="email" id="email" name="email" value="<?php echo isset($pEmail) ? htmlspecialchars($pEmail) : ''; ?>" required>
                </div>
                <div class="from-group">
                    <label for="date">أدخل التاريخ</label>
                    <input type="date" id="date" name="date" value="<?php echo isset($pDate) ? htmlspecialchars($pDate) : ''; ?>" required>
                </div>
                <div class="form-group">
                    <input type="submit" value="أحجز الآن" name="send">
                </div>
            </form>
            
            <?php if (isset($_GET['status'])): ?>
                <p style="color: <?php echo $_GET['status'] === 'success' ? 'green' : 'red'; ?>">
                    <?php echo $_GET["status"] === 'success' ? 'عفواً حدث خطأ..' : "تم الحجز"; ?>
                </p>
            <?php endif; ?>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>