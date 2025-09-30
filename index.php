<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simple-icons-font@latest/font/simple-icons.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="/resource/style.css">
  <title>PHPin</title>
</head>
<body>
  <div class="position">  
    <div class="container-box-header">
      <h2 class="text-header">Belajar Bahasa Pemograman Baik Dengan PHPin</h2>
      <p class="text-md">CDN, Learning, Experience. Semua Yang Kita Butuhkan</p>
    </div>
    
    <div class="container-box-secondary">
      <h3 class="text-content-header-md">Apa Itu PHPin?</h3>
      <article class="text-content">PHPin Adalah Sebuah Website Yang Membuat CDN Seperti Font Deco Dan Box CDN. Selain Itu, PHPin Adalah Website Yang Mengajarkan Bahasa Pemrograman Ke Pemula Secara Gratis. Selain Itu, PHPin Mempunyai Playground Yang Menguji Coba Kode Anda.</article>
    </div>
    
    <div class="container-box-icon">
      <h3 class="blue-text">Bahasa Pemograman Frontend Web Yang Anda Akan Pelajari.</h3>
      <div class="inner-container-box-icon-text-center">
        <i class="si si-javascript fa-4x icon"></i><i class="si si-html5 fa-4x icon"></i><i class="si si-css fa-4x icon"></i><i class="si si-typescript fa-4x icon"></i><i class="si si-react fa-4x icon"></i>
        <button class="btn btn-primary" onclick="window.location.href = 'frontend-learning.php';">Learning Frontend</button>
      </div>
    </div>
    
    <div class="container-box-icon">
      <h3 class="blue-text">Bahasa Pemograman Backend Web Yang Anda Akan Pelajari</h3>
      <div class="inner-container-box-icon-text-center">
        <i class="si si-php fa-4x icon"></i><i class="si si-python fa-4x icon"></i><i class="si si-go fa-4x icon"></i><i class="si si-postgresql fa-4x icon"></i><i class="si si-nodedotjs fa-4x icon"></i>
        <button class="btn btn-secondary">Learning Backend(Coming Soon)</button>
      </div>
    </div>
    
    <div class="container-box-icon">
      <h3 class="blue-text">Bahasa Pemograman Mobile/Game Language Yang Akan Kalian Pelajari</h3>
      <div class="inner-container-box-icon-text-center">
        <i class="si si-kotlin fa-4x icon"></i><i class="si si-c fa-4x icon"></i><i class="si si-cplusplus fa-4x icon"></i><i class="si si-swift fa-4x icon"></i><i class="si si-dart fa-4x icon"></i>
        <button class="btn btn-secondary">Learning Mobile(Coming Soon)</button>
      </div>
    </div>
    
    <div class="container-box-primary">
      <h3 class="blue-text">Wanna CDN? (Beta)</h3>
      <a href="https://phpin.infinityfreeapp.com/">Go To PHPin CDN</a>
    </div>
  </div>
<script src="https://www.google.com/recaptcha/api.js?render=6LeHYNArAAAAAO4qZOW5m3di-fVualkc9RQLzn76"></script>
<script>
  grecaptcha.ready(function() {
    grecaptcha.execute("6LeHYNArAAAAAO4qZOW5m3di-fVualkc9RQLzn76", {action: "background_check"})
      .then(function(token) {
        fetch("verify.php", {
          method: "POST",
          headers: { "Content-Type": "application/x-www-form-urlencoded" },
          body: "g-recaptcha-response=" + encodeURIComponent(token)
        });
      });
  });
</script>
</body>
</html>