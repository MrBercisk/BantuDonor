<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.18.0/dist/css/uikit.min.css" />
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
    <title>Bantu Donor</title>
</head>
<body>
    
<?= $this->renderSection('content');?>

<?= $this->include('home/footer');?>

<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.18.0/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.18.0/dist/js/uikit-icons.min.js"></script>

<!-- UIkit JS Icon -->
<script src="uikit/dist/js/uikit-icons.min.js"></script>

<!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>