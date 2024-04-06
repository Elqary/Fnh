<!DOCTYPE html>
<html lang="ar">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    /* أنماط CSS إضافية لتحسين التصميم */
    body {
        direction: rtl; /* توجيه النصوص للعربية */
    }
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .waiting-message {
        text-align: center;
    }
</style>
<title>𝓕𝓷𝓱</title>
</head>
<body>
<center>
<h1 class='mb-4'>𝓕𝓷𝓱</h1>
<div class="card animated fadeIn">
<div class="card-body">

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="part" class="card-title">اختر المادة التي تريد مراجعتها 😊</label> <br>
    <select name="part" id="part">
    <option value="">إختر مادة</option>
        <option value="عربي">اللغة العربية 🇪🇬 </option>
        <option value="فرنساوي">اللغة الفرنسية 🇫🇷 </option>
        <option value="إنجليزي">اللغة الإنجليزية 🇬🇧 </option>
        <option value="فيزياء">فيزياء 💡 </option>
        <option value="كيمياء">كيمياء 🧪 </option>
        <option value="أحياء">احياء 🧬 </option>
        <option value="جيولوجيا">جيولوجيا 🌏 </option>
        <!-- قم بإضافة المزيد من الخيارات حسب الحاجة -->
    </select>
    <br><br>
    <input type="submit" name="submit" value="انطلق ⚡️"><br><br><br>
     <p class="card-text">سيتم إضافة باقي المواد الادبية واللغات الثانية في القريب العاجل . 😍<br>
    ● أسرة 𝓕𝓷𝓱 تتمني لكم دوام التفوق ♡
    <br>
    🧑‍💻 المطور :《 Abdullah El-qary 》 
    </p>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    // تحميل ملفات الأسئلة والإجابات المناسبة
    $part = $_POST["part"];
    

    // عرض الأسئلة
    echo "    <div class='waiting-message'><br><h1 class='mb-4'>من فضلك انتظر ...</h1><br><p class='mb-4'>سيتم تحويلك إلى الصفحة المطلوبة في وقت قصير.</p><br><div class='spinner-border text-primary' role='status'><br><span class='visually-hidden'>Loading...</span><br></div><br></div><br></div><br><script> setTimeout(function() {window.location.href = '/$part/index.php';}, 2000);</script>";
    
}
?>
</center>
</body>
</html>