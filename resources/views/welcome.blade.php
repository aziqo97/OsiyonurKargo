<!DOCTYPE html><html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="images/fav.png" rel="icon">

    <title>Tez-Tez</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="home" id="home">
      <div action class="box__form">
        <img src="images/logo.png" width="130" height="72" alt="Logo" class="logo">

        <!-- asosiy qisim -->
        <div class="check__status">
          <h1>Buyurtma holatini tekshirish</h1>
          <p>
            Onlayn do'kondan olingan buyurtmaning to'liq shtrix kodini kiriting
          </p>
          <input type="text" name="shtrix" id="shtrix" placeholder="shtrix kod">
          <button id="send__btn">Tekshirish</button>
        </div>
        <!-- asosiy end -->

        <!-- kelgan bolsa chiqadi-->
        <div class="succes__status" style="opacity: 0;">
          <div class="check__gif">
            <img src="images/check_gif.gif" alt>
            <img src="images/y.png" alt class="check__img">
          </div>
          <h1 class="success_h2"></h1>
            <h2 class="success_provider"></h2>
          <b class="date"></b>
          <p class="succes_p"></p>
          <button id="reset__btn2">Boshqa buyurtmani teshirish</button>
        </div>
        <!-- end -->

        <!-- kelmagan bolsa chiqadi -->
        <div class="error__status" style="opacity: 0;">
          <img src="images/x.png" alt>
          <h1 class="error_h1"></h1>
          <p class="error_p"></p>
          <button id="reset__btn1">Boshqa buyurtmani teshirish</button>
        </div>
        <!-- end -->

        <img src="fonts/box.svg" alt class="prize1">
        <img src="fonts/box.svg" alt class="prize2">
      </div>
      <!-- orqa fon svg animatsiya -->
      <div class="box__bg">
        <svg id="bg" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" viewBox="0 0 2851 952" shape-rendering="geometricPrecision" text-rendering="geometricPrecision">
          <defs>
            <lineargradient id="bg-s-path32-fill" x1="1031.44" y1="235.45" x2="1026.67" y2="236.102" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
              <stop id="bg-s-path32-fill-0" offset="0%" stop-color="#68d2ff"/>
              <stop id="bg-s-path32-fill-1" offset="100%" stop-color="#2287d9"/>
            </lineargradient>
            <lineargradient id="bg-s-path33-fill" x1="1180.88" y1="247.706" x2="1176.57" y2="248.298" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
              <stop id="bg-s-path33-fill-0" offset="0%" stop-color="#68d2ff"/>
              <stop id="bg-s-path33-fill-1" offset="100%" stop-color="#2287d9"/>
            </lineargradient>
            <lineargradient id="bg-s-path34-fill" x1="1175.59" y1="240.879" x2="1169.96" y2="241.624" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
              <stop id="bg-s-path34-fill-0" offset="0%" stop-color="#68d2ff"/>
              <stop id="bg-s-path34-fill-1" offset="100%" stop-color="#2287d9"/>
            </lineargradient>
            <lineargradient id="bg-s-path35-fill" x1="1206.87" y1="236.801" x2="1145.24" y2="245.265" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
              <stop id="bg-s-path35-fill-0" offset="0%" stop-color="#68d2ff"/>
              <stop id="bg-s-path35-fill-1" offset="100%" stop-color="#2287d9"/>
            </lineargradient>
            <lineargradient id="bg-s-path36-fill" x1="1361.43" y1="189.986" x2="1284.15" y2="200.6" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
              <stop id="bg-s-path36-fill-0" offset="0%" stop-color="#68d2ff"/>
              <stop id="bg-s-path36-fill-1" offset="100%" stop-color="#2287d9"/>
            </lineargradient>
            <lineargradient id="bg-s-path37-fill" x1="1153.48" y1="260.273" x2="1179.5" y2="133.731" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
              <stop id="bg-s-path37-fill-0" offset="0%" stop-color="#68d2ff"/>
              <stop id="bg-s-path37-fill-1" offset="100%" stop-color="#2287d9"/>
            </lineargradient>
            <lineargradient id="bg-s-path38-fill" x1="1348.9" y1="215.518" x2="1297.14" y2="222.627" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
              <stop id="bg-s-path38-fill-0" offset="0%" stop-color="#68d2ff"/>
              <stop id="bg-s-path38-fill-1" offset="100%" stop-color="#2287d9"/>
            </lineargradient>
            <lineargradient id="bg-s-path39-fill" x1="1137.65" y1="241.945" x2="1114.12" y2="245.177" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
              <stop id="bg-s-path39-fill-0" offset="0%" stop-color="#68d2ff"/>
              <stop id="bg-s-path39-fill-1" offset="100%" stop-color="#2287d9"/>
            </lineargradient>
            <lineargradient id="bg-s-path40-fill" x1="1147.9" y1="242.502" x2="1135.11" y2="244.259" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
              <stop id="bg-s-path40-fill-0" offset="0%" stop-color="#68d2ff"/>
              <stop id="bg-s-path40-fill-1" offset="100%" stop-color="#2287d9"/>
            </lineargradient>
            <lineargradient id="bg-s-path41-fill" x1="1118.75" y1="243.103" x2="1113.75" y2="243.79" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
              <stop id="bg-s-path41-fill-0" offset="0%" stop-color="#68d2ff"/>
              <stop id="bg-s-path41-fill-1" offset="100%" stop-color="#2287d9"/>
            </lineargradient>
            <lineargradient id="bg-s-path42-fill" x1="1133.69" y1="237.655" x2="1198.94" y2="222.365" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
              <stop id="bg-s-path42-fill-0" offset="0%" stop-color="#68d2ff"/>
              <stop id="bg-s-path42-fill-1" offset="100%" stop-color="#2287d9"/>
            </lineargradient>
            <lineargradient id="bg-s-path43-fill" x1="1172.85" y1="243.506" x2="1171.44" y2="251.834" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
              <stop id="bg-s-path43-fill-0" offset="0%" stop-color="#68d2ff"/>
              <stop id="bg-s-path43-fill-1" offset="100%" stop-color="#2287d9"/>
            </lineargradient>
            <lineargradient id="bg-s-path44-fill" x1="1172.85" y1="243.506" x2="1171.44" y2="251.834" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
              <stop id="bg-s-path44-fill-0" offset="0%" stop-color="#68d2ff"/>
              <stop id="bg-s-path44-fill-1" offset="100%" stop-color="#2287d9"/>
            </lineargradient>
            <lineargradient id="bg-s-path45-fill" x1="1027.94" y1="236.71" x2="1028.43" y2="240.254" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
              <stop id="bg-s-path45-fill-0" offset="0%" stop-color="#68d2ff"/>
              <stop id="bg-s-path45-fill-1" offset="100%" stop-color="#2287d9"/>
            </lineargradient>
            <lineargradient id="bg-s-path46-fill" x1="1027.94" y1="236.708" x2="1028.43" y2="240.253" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
              <stop id="bg-s-path46-fill-0" offset="0%" stop-color="#68d2ff"/>
              <stop id="bg-s-path46-fill-1" offset="100%" stop-color="#2287d9"/>
            </lineargradient>
            <lineargradient id="bg-s-path47-fill" x1="1182.62" y1="245.177" x2="1181.21" y2="253.506" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
              <stop id="bg-s-path47-fill-0" offset="0%" stop-color="#68d2ff"/>
              <stop id="bg-s-path47-fill-1" offset="100%" stop-color="#2287d9"/>
            </lineargradient>
            <lineargradient id="bg-s-path48-fill" x1="1184.93" y1="248.129" x2="1183.54" y2="256.46" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
              <stop id="bg-s-path48-fill-0" offset="0%" stop-color="#68d2ff"/>
              <stop id="bg-s-path48-fill-1" offset="100%" stop-color="#2287d9"/>
            </lineargradient>
            <lineargradient id="bg-s-path71-fill" x1="1417.1" y1="907.525" x2="1348.88" y2="861.175" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
              <stop id="bg-s-path71-fill-0" offset="0%" stop-color="#aec9e8"/>
              <stop id="bg-s-path71-fill-1" offset="21%" stop-color="#b5cde9"/>
              <stop id="bg-s-path71-fill-2" offset="53%" stop-color="#c8d9ec"/>
              <stop id="bg-s-path71-fill-3" offset="89%" stop-color="#e8ecf0"/>
              <stop id="bg-s-path71-fill-4" offset="100%" stop-color="#f2f2f2"/>
            </lineargradient>
            <lineargradient id="bg-s-path81-fill" x1="209.71" y1="536.747" x2="250.095" y2="536.747" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
              <stop id="bg-s-path81-fill-0" offset="0%" stop-color="#ffc572"/>
              <stop id="bg-s-path81-fill-1" offset="100%" stop-color="#ff4eb3"/>
            </lineargradient>
            <lineargradient id="bg-s-path134-fill" x1="2208.14" y1="653.81" x2="2282.9" y2="653.81" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
              <stop id="bg-s-path134-fill-0" offset="0%" stop-color="#ffc572"/>
              <stop id="bg-s-path134-fill-1" offset="100%" stop-color="#ff4eb3"/>
            </lineargradient>
            <lineargradient id="bg-s-path136-fill" x1="2132.21" y1="750.854" x2="2399.46" y2="816.034" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
              <stop id="bg-s-path136-fill-0" offset="0%" stop-color="#68d2ff"/>
              <stop id="bg-s-path136-fill-1" offset="100%" stop-color="#2287d9"/>
            </lineargradient>
            <lineargradient id="bg-s-path137-fill" x1="2115.17" y1="820.701" x2="2382.41" y2="885.881" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
              <stop id="bg-s-path137-fill-0" offset="0%" stop-color="#68d2ff"/>
              <stop id="bg-s-path137-fill-1" offset="100%" stop-color="#2287d9"/>
            </lineargradient>
            <lineargradient id="bg-s-path143-fill" x1="1873.63" y1="867.2" x2="2078.52" y2="867.2" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
              <stop id="bg-s-path143-fill-0" offset="0%" stop-color="#aec9e8"/>
              <stop id="bg-s-path143-fill-1" offset="21%" stop-color="#b5cde9"/>
              <stop id="bg-s-path143-fill-2" offset="53%" stop-color="#c8d9ec"/>
              <stop id="bg-s-path143-fill-3" offset="89%" stop-color="#e8ecf0"/>
              <stop id="bg-s-path143-fill-4" offset="100%" stop-color="#f2f2f2"/>
            </lineargradient>
            <lineargradient id="bg-s-path144-fill" x1="2394.68" y1="869.1" x2="2599.57" y2="869.1" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
              <stop id="bg-s-path144-fill-0" offset="0%" stop-color="#aec9e8"/>
              <stop id="bg-s-path144-fill-1" offset="21%" stop-color="#b5cde9"/>
              <stop id="bg-s-path144-fill-2" offset="53%" stop-color="#c8d9ec"/>
              <stop id="bg-s-path144-fill-3" offset="89%" stop-color="#e8ecf0"/>
              <stop id="bg-s-path144-fill-4" offset="100%" stop-color="#f2f2f2"/>
            </lineargradient>
            <lineargradient id="bg-s-path153-fill" x1="255.085" y1="902.731" x2="2658.8" y2="902.731" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
              <stop id="bg-s-path153-fill-0" offset="0%" stop-color="#68d2ff"/>
              <stop id="bg-s-path153-fill-1" offset="100%" stop-color="#2287d9"/>
            </lineargradient>
            <lineargradient id="bg-s-path167-fill" x1="475.312" y1="877.499" x2="487.68" y2="877.499" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
              <stop id="bg-s-path167-fill-0" offset="0%" stop-color="#60a1e3"/>
              <stop id="bg-s-path167-fill-1" offset="100%" stop-color="#5d5fd0"/>
            </lineargradient>
            <lineargradient id="bg-s-path179-fill" x1="332.97" y1="876.913" x2="345.338" y2="876.913" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
              <stop id="bg-s-path179-fill-0" offset="0%" stop-color="#60a1e3"/>
              <stop id="bg-s-path179-fill-1" offset="100%" stop-color="#5d5fd0"/>
            </lineargradient>
            <lineargradient id="bg-s-path183-fill" x1="308.054" y1="857.561" x2="408.832" y2="857.561" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
              <stop id="bg-s-path183-fill-0" offset="0%" stop-color="#ff31c4"/>
              <stop id="bg-s-path183-fill-1" offset="100%" stop-color="#9a2e9e"/>
            </lineargradient>
            <lineargradient id="bg-s-path184-fill" x1="303.154" y1="804.634" x2="342.128" y2="804.634" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
              <stop id="bg-s-path184-fill-0" offset="0%" stop-color="#ffc572"/>
              <stop id="bg-s-path184-fill-1" offset="100%" stop-color="#ff4eb3"/>
            </lineargradient>
            <lineargradient id="bg-s-path186-fill" x1="291.667" y1="788.962" x2="330.227" y2="789.358" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
              <stop id="bg-s-path186-fill-0" offset="0%" stop-color="#ffc572"/>
              <stop id="bg-s-path186-fill-1" offset="15%" stop-color="#ffbc77"/>
              <stop id="bg-s-path186-fill-2" offset="39%" stop-color="#ffa584"/>
              <stop id="bg-s-path186-fill-3" offset="69%" stop-color="#ff7e99"/>
              <stop id="bg-s-path186-fill-4" offset="100%" stop-color="#ff4eb3"/>
            </lineargradient>
            <lineargradient id="bg-s-path192-fill" x1="377.013" y1="843.386" x2="475.49" y2="843.386" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
              <stop id="bg-s-path192-fill-0" offset="0%" stop-color="#ff31c4"/>
              <stop id="bg-s-path192-fill-1" offset="100%" stop-color="#9a2e9e"/>
            </lineargradient>
            <lineargradient id="bg-s-path201-fill" x1="400.634" y1="739.211" x2="427.464" y2="739.211" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
              <stop id="bg-s-path201-fill-0" offset="0%" stop-color="#ffc572"/>
              <stop id="bg-s-path201-fill-1" offset="100%" stop-color="#ff4eb3"/>
            </lineargradient>
            <lineargradient id="bg-s-path204-fill" x1="385.399" y1="780.549" x2="408.822" y2="790.714" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
              <stop id="bg-s-path204-fill-0" offset="0%" stop-color="#92d2ff"/>
              <stop id="bg-s-path204-fill-1" offset="100%" stop-color="#28a0ff"/>
            </lineargradient>
            <lineargradient id="bg-s-path205-fill" x1="415.743" y1="804.655" x2="406.126" y2="829.4" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
              <stop id="bg-s-path205-fill-0" offset="0%" stop-color="#60a1e3"/>
              <stop id="bg-s-path205-fill-1" offset="100%" stop-color="#5d5fd0"/>
            </lineargradient>
            <lineargradient id="bg-s-path206-fill" x1="425.208" y1="770.958" x2="411.851" y2="798.471" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
              <stop id="bg-s-path206-fill-0" offset="0%" stop-color="#92d2ff"/>
              <stop id="bg-s-path206-fill-1" offset="100%" stop-color="#28a0ff"/>
            </lineargradient>
            <lineargradient id="bg-s-path211-fill" x1="456.362" y1="706.215" x2="511.991" y2="706.215" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
              <stop id="bg-s-path211-fill-0" offset="0%" stop-color="#ffc572"/>
              <stop id="bg-s-path211-fill-1" offset="100%" stop-color="#ff4eb3"/>
            </lineargradient>
            <lineargradient id="bg-s-path265-fill" x1="1363.75" y1="855.655" x2="1711.93" y2="855.655" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
              <stop id="bg-s-path265-fill-0" offset="0%" stop-color="#68d2ff"/>
              <stop id="bg-s-path265-fill-1" offset="100%" stop-color="#2287d9"/>
            </lineargradient>
            <lineargradient id="bg-s-path266-fill" x1="1537.69" y1="873.439" x2="1711.93" y2="873.439" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
              <stop id="bg-s-path266-fill-0" offset="0%" stop-color="#68d2ff"/>
              <stop id="bg-s-path266-fill-1" offset="100%" stop-color="#2287d9"/>
            </lineargradient>
            <lineargradient id="bg-s-path267-fill" x1="1711.93" y1="805" x2="1819.48" y2="805" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
              <stop id="bg-s-path267-fill-0" offset="0%" stop-color="#68d2ff"/>
              <stop id="bg-s-path267-fill-1" offset="100%" stop-color="#2287d9"/>
            </lineargradient>
            <lineargradient id="bg-s-path268-fill" x1="1813.5" y1="834.469" x2="1819.48" y2="834.469" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
              <stop id="bg-s-path268-fill-0" offset="0%" stop-color="#ffc572"/>
              <stop id="bg-s-path268-fill-1" offset="100%" stop-color="#ff4eb3"/>
            </lineargradient>
            <lineargradient id="bg-s-path269-fill" x1="1770.48" y1="827.602" x2="1769.26" y2="768.935" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
              <stop id="bg-s-path269-fill-0" offset="0%" stop-color="#d2dfef"/>
              <stop id="bg-s-path269-fill-1" offset="36%" stop-color="#d9e3f0"/>
              <stop id="bg-s-path269-fill-2" offset="87%" stop-color="#eceff1"/>
              <stop id="bg-s-path269-fill-3" offset="100%" stop-color="#f2f2f2"/>
            </lineargradient>
            <lineargradient id="bg-s-path270-fill" x1="1727.47" y1="801.364" x2="1747.03" y2="801.364" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
              <stop id="bg-s-path270-fill-0" offset="0%" stop-color="#ffc572"/>
              <stop id="bg-s-path270-fill-1" offset="100%" stop-color="#ff4eb3"/>
            </lineargradient>
            <lineargradient id="bg-s-path273-fill" x1="1363.75" y1="873.439" x2="1478.24" y2="873.439" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
              <stop id="bg-s-path273-fill-0" offset="0%" stop-color="#68d2ff"/>
              <stop id="bg-s-path273-fill-1" offset="100%" stop-color="#2287d9"/>
            </lineargradient>
            <lineargradient id="bg-s-path275-fill" x1="1494.93" y1="873.713" x2="1520.32" y2="873.713" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
              <stop id="bg-s-path275-fill-0" offset="0%" stop-color="#60a1e3"/>
              <stop id="bg-s-path275-fill-1" offset="100%" stop-color="#5d5fd0"/>
            </lineargradient>
            <lineargradient id="bg-s-path278-fill" x1="1734.41" y1="873.729" x2="1759.81" y2="873.729" spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
              <stop id="bg-s-path278-fill-0" offset="0%" stop-color="#60a1e3"/>
              <stop id="bg-s-path278-fill-1" offset="100%" stop-color="#5d5fd0"/>
            </lineargradient>
          </defs>
          <path id="bg-s-path1" d="M2810.75,800.864c-17.39-14.136-38.74-20.562-53.29-39.275-31.13-39.993-14.57-106.559-11.75-163.127c5.71-114.557-65.47-226.769-153.62-242.159-20.15-3.517-41.12-2.676-60.1-12.136-52.98-26.422-64.88-114.019-95.37-175.883-38.26-77.6119-114.45-117.935-185.14-106.1855-70.7,11.7494-134,71.5165-170.67,150.4115l-1.07,2.689c-47.91,59.506-127.42,71.076-184.4,26.837-55.49-43.095-84.55-126.789-135.92-177.7035-49.94-49.4937-117.34-63.07729-179.52-50.4039s-119.99,49.2869-173.54,92.0374c-24.69,19.706-48.85,40.916-75.48,55.851-86,48.266-194.17,20.41-259.25-66.732-15.51-20.7683-28.85-44.5843-46.59-62.0567-45.302-44.7085-110.162-39.0682-163.332-12.4114s-99.919,71.0481-151.924,101.1521c-52.006,30.105-114.793,44.364-164.854,9.116-31.757-22.368-55.297-62.5671-89.201-78.8398-38.072-18.2446-83.346-.6343-111.331,37.3306-27.985,37.9652-39.536,93.1132-35.892,145.3092c2.564,36.696,12.032,72.372,12.609,109.193c1.218,76.371-40.53,150.563-97.184,172.683-48.447,18.92-103.188,2.661-149.4022,29.36C19.8091,577.528,-6.60511,664.022,1.4089,740.696c8.01401,76.675,43.8099,144.013,84.9165,200.306L2841.95,949c20.01-49.921,5.62-118.184-31.2-148.136Z" fill="#edf1f4"/>
          <path id="bg-s-path2" d="M408.568,437.196c-3.867.002-7.665,1.03-11.004,2.981-1.722-5.019-5.223-9.233-9.842-11.846-4.618-2.612-10.034-3.442-15.223-2.332-1.869-7.442-6.16-14.051-12.197-18.787-6.037-4.735-13.478-7.329-21.151-7.372-7.673-.042-15.143,2.468-21.233,7.136-6.089,4.668-10.454,11.229-12.406,18.649-.684,0-1.357-.107-2.062-.107-5.086.005-10.08,1.354-14.477,3.911-3.94-2.448-8.464-3.798-13.101-3.908-4.638-.109-9.221,1.024-13.273,3.282-4.052,2.259-7.426,5.561-9.771,9.564-2.345,4.002-3.577,8.56-3.566,13.199h179.883c-1.549-4.212-4.352-7.848-8.032-10.417-3.679-2.57-8.057-3.949-12.545-3.953Z" fill="#dbe2f2"/>
          <path id="bg-s-path3" d="M768.089,275.071c3.867.001,7.665,1.03,11.004,2.98c1.722-5.019,5.223-9.233,9.841-11.845c4.619-2.612,10.035-3.442,15.223-2.332c1.865-7.444,6.154-14.056,12.191-18.794c6.037-4.739,13.478-7.333,21.153-7.376c7.674-.043,15.144,2.469,21.233,7.139c6.09,4.67,10.452,11.234,12.4,18.657.684,0,1.367-.107,2.062-.107c5.085.001,10.079,1.347,14.476,3.9c3.943-2.442,8.466-3.785,13.102-3.891s9.217,1.029,13.266,3.288c4.05,2.259,7.423,5.559,9.769,9.559s3.58,8.554,3.575,13.191h-179.872c1.55-4.211,4.354-7.845,8.033-10.415c3.679-2.569,8.056-3.949,12.544-3.954Z" fill="#fff"/>
          <path id="bg-s-path4" d="M2570.2,540.004c4.44.002,8.8,1.182,12.63,3.419c1.68-4.899,4.85-9.15,9.06-12.164c4.22-3.014,9.26-4.64,14.44-4.652c1.75-.001,3.5.185,5.21.555c2.13-8.543,7.05-16.133,13.97-21.573c6.93-5.439,15.47-8.419,24.27-8.469c8.81-.05,17.38,2.832,24.37,8.192s11.99,12.894,14.22,21.412c.79,0,1.57-.117,2.38-.117c5.83-.002,11.56,1.543,16.6,4.476c4.52-2.802,9.71-4.344,15.03-4.466s10.57,1.18,15.22,3.771c4.64,2.591,8.51,6.378,11.2,10.967c2.7,4.589,4.11,9.814,4.1,15.134h-206.31c1.78-4.833,4.99-9.005,9.21-11.952c4.23-2.948,9.25-4.53,14.4-4.533Z" fill="#dbe2f2"/>
          <path id="bg-s-path5" d="M2299.88,260.377h-179.88c-.01-4.185.98-8.311,2.91-12.026c1.92-3.716,4.72-6.911,8.14-9.314c3.43-2.403,7.39-3.942,11.53-4.486c4.15-.545,8.37-.078,12.3,1.36c3.89-3.511,8.67-5.894,13.81-6.89s10.46-.568,15.38,1.238c2.95-3.471,7.1-5.711,11.62-6.278c4.52-.568,9.09.578,12.8,3.212c3.35-4.887,8.06-8.687,13.54-10.931c5.49-2.244,11.51-2.835,17.32-1.699s11.17,3.949,15.4,8.091c4.24,4.143,7.17,9.435,8.43,15.223c3.44-3.749,8.07-6.188,13.1-6.899s10.16.35,14.49,3.002c4.34,2.651,7.62,6.728,9.28,11.532c1.67,4.804,1.61,10.036-.17,14.801v.064Z" fill="#fff"/>
          <g id="bg-u-city__back" opacity="0.47">
            <g id="bg-s-g1" style="mix-blend-mode: lighten">
              <path id="bg-s-path6" d="M584.702,951.931v-213.644h33.569v-88.516h41.207v90.044h10.171v-39.68h28.483v39.167h40.193v75.288h26.453v-28.493l34.081-34.082v33.58h20.342v-96.657h42.222v262.993h-276.721Z" fill="#fff"/>
              <path id="bg-s-path7" d="M317.65,951.931v-213.644h33.569v-88.516h41.207v90.044h10.171v-39.68h28.494v39.167h40.182v75.288h26.453v-28.493l34.081-34.082v33.58h20.342v-96.657h42.223v262.993h-276.722Z" fill="#fff"/>
              <path id="bg-s-path8" d="M50.5977,951.931v-213.644h33.5685v-88.516h41.2078v90.044h10.171v-39.68h28.493v39.167h40.182v75.288h26.453v-28.493l34.081-34.082v33.58h20.353v-96.657h42.212v262.993h-276.7213Z" fill="#fff"/>
              <path id="bg-s-path9" d="M852.043,951.931v-213.644h33.568v-88.516h41.208v90.044h10.171v-39.68h28.494v39.167h40.186v75.288h26.45v-28.493l34.08-34.082v33.58h20.35v-96.657h42.22v262.993h-276.727Z" fill="#fff"/>
              <path id="bg-s-path10" d="M1119.67,951.931v-213.644h33.58v-88.516h41.2v90.044h10.18v-39.68h28.48v39.167h40.18v75.288h26.46v-28.493l34.08-34.082v33.58h20.35v-96.657h42.22v262.993h-276.73Z" fill="#fff"/>
            </g>
            <g id="bg-s-g2" opacity="0.07">
              <path id="bg-s-path11" d="M240.844,655.491c.339-1.323.512-2.683.512-4.049c0-2.262-.482-4.497-1.414-6.557-.933-2.06-2.294-3.898-3.992-5.391-1.699-1.493-3.696-2.606-5.859-3.266s-4.442-.852-6.684-.561c-2.243.29-4.398,1.055-6.322,2.244-1.923,1.188-3.571,2.774-4.834,4.65s-2.111,3.999-2.488,6.229c-.377,2.229-.275,4.514.301,6.701.41,1.539,1.047,3.008,1.891,4.359c3.972,8.469,8.479,16.676,13.493,24.573c6.165-10.545,11.09-19.349,13.708-24.904.745-1.258,1.309-2.614,1.677-4.028h.011Z" fill="#1f60b0"/>
              <path id="bg-s-path12" d="M225.448,658.994c4.172,0,7.553-3.382,7.553-7.554c0-4.171-3.381-7.553-7.553-7.553s-7.553,3.382-7.553,7.553c0,4.172,3.381,7.554,7.553,7.554Z" fill="#fff"/>
            </g>
            <g id="bg-s-g3" opacity="0.07">
              <path id="bg-s-path13" d="M1212.04,583.983c.58-2.187.68-4.471.31-6.701-.38-2.23-1.23-4.353-2.49-6.229-1.27-1.876-2.91-3.461-4.84-4.65-1.92-1.189-4.08-1.954-6.32-2.244s-4.52-.099-6.68.561c-2.17.66-4.16,1.773-5.86,3.266s-3.06,3.331-3.99,5.391c-.94,2.06-1.42,4.296-1.42,6.557c0,1.366.17,2.726.51,4.049.41,1.54,1.04,3.01,1.89,4.359c3.97,8.467,8.48,16.675,13.5,24.573c6.15-10.534,11.08-19.338,13.7-24.894.74-1.26,1.31-2.615,1.68-4.027l.01-.011Z" fill="#1f60b0"/>
              <path id="bg-s-path14" d="M1204.2,579.891c0,1.495-.44,2.956-1.27,4.198s-2.01,2.21-3.39,2.782c-1.38.571-2.9.72-4.37.428-1.46-.292-2.81-1.013-3.87-2.07-1.05-1.058-1.77-2.405-2.06-3.871s-.14-2.985.43-4.365c.58-1.38,1.55-2.559,2.79-3.387c1.24-.829,2.71-1.27,4.2-1.268c2,.003,3.92.8,5.33,2.216c1.42,1.416,2.21,3.336,2.21,5.337Z" fill="#fff"/>
            </g>
            <g id="bg-s-g4" opacity="0.07">
              <path id="bg-s-path15" d="M1310.2,551.781c.35-1.318.52-2.675.52-4.038-.11-4.149-1.83-8.092-4.8-10.989-2.98-2.897-6.96-4.518-11.11-4.518s-8.14,1.621-11.11,4.518c-2.98,2.897-4.7,6.84-4.81,10.989c0,1.363.18,2.72.53,4.038.41,1.542,1.04,3.015,1.89,4.37c3.97,8.485,8.48,16.71,13.49,24.626c6.17-10.545,11.09-19.348,13.71-24.904.74-1.253,1.31-2.606,1.68-4.017l.01-.075Z" fill="#1f60b0"/>
              <path id="bg-s-path16" d="M1302.36,547.744c-.01,1.493-.45,2.953-1.28,4.193-.83,1.241-2.01,2.208-3.4,2.778-1.38.57-2.89.718-4.36.425-1.46-.293-2.81-1.013-3.86-2.07-1.06-1.056-1.78-2.402-2.07-3.867s-.14-2.983.43-4.363c.58-1.379,1.54-2.559,2.79-3.388c1.24-.83,2.7-1.272,4.19-1.272.99-.002,1.98.193,2.9.573.91.38,1.75.937,2.45,1.64.7.702,1.26,1.537,1.64,2.455.37.919.57,1.903.57,2.896Z" fill="#fff"/>
            </g>
            <g id="bg-s-g5" opacity="0.07">
              <path id="bg-s-path17" d="M136.495,614.698c.284-1.067.428-2.166.428-3.27-.097-3.354-1.497-6.539-3.904-8.877-2.407-2.339-5.631-3.647-8.986-3.647-3.356,0-6.58,1.308-8.987,3.647-2.406,2.338-3.807,5.523-3.903,8.877-.001,1.104.143,2.203.427,3.27.329,1.248.844,2.44,1.528,3.536c3.221,6.854,6.872,13.498,10.929,19.893c4.99-8.547,8.985-15.662,11.101-20.16.601-1.019,1.061-2.116,1.367-3.259v-.01Z" fill="#1f60b0"/>
              <path id="bg-s-path18" d="M130.149,611.428c0,1.211-.359,2.395-1.032,3.402-.672,1.006-1.629,1.791-2.747,2.254-1.119.464-2.35.585-3.537.349-1.188-.237-2.279-.82-3.135-1.676s-1.439-1.947-1.675-3.134c-.236-1.188-.115-2.419.348-3.537.464-1.119,1.248-2.075,2.255-2.748c1.007-.672,2.19-1.031,3.401-1.031.804-.002,1.601.156,2.344.463.744.307,1.419.758,1.988,1.326.569.569,1.02,1.245,1.327,1.988s.464,1.54.463,2.344Z" fill="#fff"/>
            </g>
          </g>
          <g id="bg-u-city__back2" opacity="0.47">
            <g id="bg-s-g6" style="mix-blend-mode: lighten">
              <path id="bg-s-path19" d="M1866.86,951.929v-213.644h33.58v-88.515h41.2v90.043h10.18v-39.68h28.48v39.167h40.2v75.288h26.45v-28.493l34.08-34.082v33.58h20.34v-96.657h42.23v262.993h-276.74Z" fill="#fff"/>
              <path id="bg-s-path20" d="M1599.81,951.929v-213.644h33.58v-88.515h41.21v90.043h10.17v-39.68h28.48v39.167h40.19v75.288h26.46v-28.493l34.08-34.082v33.58h20.34v-96.657h42.22v262.993h-276.73Z" fill="#fff"/>
              <path id="bg-s-path21" d="M1332.77,951.929v-213.644h33.57v-88.515h41.21v90.043h10.17v-39.68h28.48v39.167h40.19v75.288h26.45v-28.493l34.09-34.082v33.58h20.34v-96.657h42.22v262.993h-276.72Z" fill="#fff"/>
              <path id="bg-s-path22" d="M2134.21,951.929v-213.644h33.57v-88.515h41.21v90.043h10.17v-39.68h28.48v39.167h40.2v75.288h26.45v-28.493l34.08-34.082v33.58h20.34v-96.657h42.23v262.993h-276.73Z" fill="#fff"/>
              <path id="bg-s-path23" d="M2401.84,951.929v-213.644h33.57v-88.515h41.21v90.043h10.17v-39.68h28.49v39.167h40.19v75.288h26.45v-28.493L2616,752.013v33.58h20.34v-96.657h42.22v262.993h-276.72Z" fill="#fff"/>
            </g>
            <g id="bg-s-g7" opacity="0.07">
              <path id="bg-s-path24" d="M1523.02,655.485c.62-2.354.69-4.819.2-7.204-.48-2.386-1.5-4.629-2.99-6.557-1.48-1.927-3.39-3.488-5.58-4.562-2.18-1.074-4.58-1.633-7.02-1.633-2.43,0-4.83.559-7.02,1.633-2.18,1.074-4.09,2.635-5.58,4.562-1.48,1.928-2.51,4.171-2.99,6.557-.48,2.385-.41,4.85.21,7.204.4,1.54,1.04,3.01,1.89,4.359c3.97,8.469,8.48,16.676,13.49,24.573c6.17-10.545,11.09-19.349,13.7-24.904.75-1.257,1.32-2.613,1.69-4.028Z" fill="#1f60b0"/>
              <path id="bg-s-path25" d="M1507.62,658.988c4.17,0,7.56-3.382,7.56-7.554c0-4.171-3.39-7.553-7.56-7.553s-7.55,3.382-7.55,7.553c0,4.172,3.38,7.554,7.55,7.554Z" fill="#fff"/>
            </g>
            <g id="bg-s-g8" opacity="0.07">
              <path id="bg-s-path26" d="M2494.22,583.979c.34-1.323.51-2.683.51-4.049c0-2.261-.48-4.497-1.41-6.557-.94-2.06-2.3-3.898-4-5.391-1.69-1.493-3.69-2.606-5.85-3.266-2.17-.66-4.45-.851-6.69-.561s-4.4,1.055-6.32,2.244-3.57,2.774-4.83,4.65c-1.27,1.876-2.12,3.999-2.49,6.229-.38,2.23-.28,4.514.3,6.701.41,1.539,1.05,3.008,1.89,4.359c3.97,8.47,8.48,16.678,13.49,24.573c6.17-10.534,11.09-19.338,13.71-24.893.74-1.259,1.31-2.614,1.68-4.028l.01-.011Z" fill="#1f60b0"/>
              <path id="bg-s-path27" d="M2486.38,579.887c0,1.494-.45,2.955-1.28,4.197s-2.01,2.21-3.39,2.782-2.9.721-4.36.43c-1.47-.292-2.81-1.011-3.87-2.067-1.05-1.057-1.77-2.403-2.07-3.868-.29-1.465-.14-2.984.43-4.364.58-1.38,1.54-2.56,2.79-3.39c1.24-.83,2.7-1.273,4.19-1.273.99,0,1.98.195,2.89.575.92.38,1.75.936,2.45,1.637.71.702,1.26,1.534,1.64,2.451.38.916.58,1.899.58,2.89Z" fill="#fff"/>
            </g>
            <g id="bg-s-g9" opacity="0.07">
              <path id="bg-s-path28" d="M2592.37,551.775c.34-1.32.51-2.676.51-4.039c0-4.219-1.67-8.265-4.66-11.248-2.98-2.984-7.03-4.66-11.25-4.66-4.21,0-8.26,1.676-11.24,4.66-2.99,2.983-4.66,7.029-4.66,11.248c0,1.363.17,2.721.52,4.039.41,1.542,1.05,3.015,1.89,4.369c3.97,8.469,8.48,16.677,13.49,24.573c6.17-10.545,11.09-19.348,13.71-24.904.74-1.255,1.31-2.607,1.68-4.017l.01-.021Z" fill="#1f60b0"/>
              <path id="bg-s-path29" d="M2584.53,547.737c0,1.494-.44,2.954-1.27,4.196-.83,1.243-2.01,2.211-3.39,2.782-1.38.572-2.9.722-4.37.43-1.46-.291-2.81-1.011-3.87-2.067-1.05-1.056-1.77-2.402-2.06-3.867-.29-1.466-.14-2.984.43-4.365.57-1.38,1.54-2.559,2.78-3.389s2.7-1.273,4.2-1.273c.99,0,1.97.195,2.89.575.91.379,1.74.936,2.45,1.637.7.701,1.25,1.534,1.63,2.45.38.917.58,1.899.58,2.891Z" fill="#fff"/>
            </g>
            <g id="bg-s-g10" opacity="0.07">
              <path id="bg-s-path30" d="M1418.67,614.695c.28-1.067.42-2.166.41-3.269c0-1.692-.33-3.368-.98-4.931-.64-1.563-1.59-2.984-2.79-4.18-1.2-1.197-2.62-2.146-4.18-2.793-1.56-.648-3.24-.981-4.93-.981s-3.37.333-4.93.981c-1.56.647-2.99,1.596-4.18,2.793-1.2,1.196-2.15,2.617-2.79,4.18-.65,1.563-.99,3.239-.99,4.931c0,1.103.15,2.202.43,3.269.33,1.249.85,2.441,1.53,3.536c3.22,6.857,6.87,13.501,10.93,19.893c4.99-8.547,8.98-15.662,11.1-20.16.6-1.019,1.06-2.115,1.37-3.258v-.011Z" fill="#1f60b0"/>
              <path id="bg-s-path31" d="M1412.32,611.425c0,1.21-.36,2.394-1.03,3.401-.67,1.006-1.63,1.791-2.75,2.254-1.12.464-2.35.585-3.53.349-1.19-.237-2.28-.82-3.14-1.676s-1.44-1.947-1.67-3.134c-.24-1.188-.12-2.419.34-3.537.47-1.119,1.25-2.075,2.26-2.748c1.01-.672,2.19-1.031,3.4-1.031c1.62,0,3.18.645,4.33,1.793s1.79,2.705,1.79,4.329Z" fill="#fff"/>
            </g>
          </g>
          <g id="bg-u-fly_to" transform="translate(1853.039185,359.171643)">
            <g id="bg-u-fly" transform="translate(-1167.305053,-206.290786)">
              <path id="bg-s-path32" d="M1029.12,229.354l2.09.136-.91,13.806-2.08-.137.9-13.805Z" fill="url(#bg-s-path32-fill)"/>
              <path id="bg-s-path33" d="M1176.2,245.568l1.7-.98l3.36,5.838-1.7.981-3.36-5.839Z" fill="url(#bg-s-path33-fill)"/>
              <path id="bg-s-path34" d="M1173.09,251.106l-1.7-.987l3.38-5.826l1.71.986-3.39,5.827Z" fill="url(#bg-s-path34-fill)"/>
              <path id="bg-s-path35" d="M1151.89,244.709l46.72,2.18c2.16.101,4.28-.661,5.89-2.12c1.6-1.458,2.56-3.494,2.66-5.659l-63.05-2.954c-.1,2.166.66,4.283,2.12,5.886c1.46,1.604,3.49,2.563,5.66,2.667Z" fill="url(#bg-s-path35-fill)"/>
              <path id="bg-s-path36" d="M1285.07,207.397l37.09,24.074L1356.61,155l-20.71,2.273-50.83,50.124Z" fill="url(#bg-s-path36-fill)"/>
              <path id="bg-s-path37" d="M1006.41,229.944l19.77,1.118l49.18,2.795l63.43,3.606l62.53,3.55c10.56.596,20.86,2.133,31.42,2.729c6.41.373,13.04.42,19.44.755s12.17-.55,18.44-1.807c14.72-2.963,29.17-7.053,43.69-10.677l31.41-7.715.49-8.59-65-8.534-35.7-2.021-81.64-4.659-89.35-5.068c-19.84-1.127-39.67-2.227-59.51-3.438-13.97-.848-30.955,8.646-36.825,21.578-1.714,3.782,8.982,9.475,11.786,10.947c5.183,2.605,10.719,4.435,16.439,5.431Z" fill="url(#bg-s-path37-fill)"/>
              <path id="bg-s-path38" d="M1296.62,219.014l31.94,4.351l20.06-9.68-7.54-2.283-44.46,7.612Z" fill="url(#bg-s-path38-fill)"/>
              <path id="bg-s-path39" d="M1117.89,235.599c2.88-.327,5.79-.421,8.69-.279c3.52.146,7.01.773,10.36,1.863.51,2.534.86,7.025-.53,13.63-3.45.822-6.99,1.17-10.54,1.035-2.9-.122-5.79-.467-8.64-1.035-.84-.167-1.64-.344-2.42-.54l.62-14.376c.77-.074,1.6-.205,2.46-.298Z" fill="url(#bg-s-path39-fill)"/>
              <path id="bg-s-path40" d="M1136.52,237.201c7,2.283,11.69,5.935,11.63,7.342s-5.02,4.602-12.11,6.288c1.34-6.624,1-11.096.48-13.63Z" fill="url(#bg-s-path40-fill)"/>
              <path id="bg-s-path41" d="M1117.03,250.841l.66-15.251-2.46.335-.61,14.376l2.41.54Z" fill="url(#bg-s-path41-fill)"/>
              <path id="bg-s-path42" d="M1119.28,228.9l15.08-2.069l91.05-1.835-17.38,7.211-40.72,4.146-50.2-5.049l2.17-2.404Z" fill="url(#bg-s-path42-fill)"/>
              <path id="bg-s-path43" d="M1167.1,252.881c.11.833.47,1.614,1.03,2.244.55.629,1.28,1.08,2.1,1.294.81.214,1.67.183,2.46-.091.8-.274,1.49-.777,2-1.446s.81-1.474.86-2.313-.15-1.674-.57-2.4-1.05-1.31-1.81-1.678-1.6-.503-2.44-.389c-1.11.157-2.12.747-2.8,1.642s-.98,2.023-.83,3.137Z" fill="url(#bg-s-path43-fill)"/>
              <path id="bg-s-path44" d="M1168.65,252.667c.07.529.29,1.025.64,1.425.36.401.82.688,1.33.825.52.138,1.06.119,1.57-.054.5-.172.95-.491,1.27-.915s.51-.935.54-1.467c.04-.532-.09-1.062-.36-1.523-.27-.46-.67-.831-1.15-1.064-.47-.233-1.01-.319-1.54-.246-.71.098-1.34.47-1.77,1.035-.44.566-.62,1.279-.53,1.984Z" fill="url(#bg-s-path44-fill)"/>
              <path id="bg-s-path45" d="M1024.6,243.817c.12.833.47,1.613,1.03,2.243s1.29,1.08,2.1,1.295c.81.214,1.67.182,2.47-.092.79-.273,1.49-.776,1.99-1.445.51-.67.81-1.474.86-2.313s-.15-1.675-.57-2.401c-.42-.725-1.05-1.309-1.81-1.677-.75-.368-1.6-.504-2.43-.39-1.12.153-2.13.742-2.81,1.638s-.98,2.026-.83,3.142Z" fill="url(#bg-s-path45-fill)"/>
              <path id="bg-s-path46" d="M1026.15,243.61c.07.525.3,1.017.65,1.414.35.396.81.679,1.33.814.51.134,1.05.113,1.55-.06s.94-.491,1.26-.913.51-.929.55-1.459c.03-.529-.1-1.056-.36-1.514-.27-.458-.67-.827-1.14-1.06-.48-.233-1.01-.32-1.54-.25-.71.098-1.34.471-1.78,1.039-.43.567-.62,1.283-.52,1.989Z" fill="url(#bg-s-path46-fill)"/>
              <path id="bg-s-path47" d="M1177.36,255.023c-.94-2.153.05-4.655,2.2-5.588c2.16-.934,4.66.054,5.59,2.207.94,2.152-.05,4.654-2.2,5.588-2.16.933-4.66-.055-5.59-2.207Z" fill="url(#bg-s-path47-fill)"/>
              <path id="bg-s-path48" d="M1180.27,255.648c-1.37-.571-2.02-2.143-1.44-3.51.57-1.367,2.14-2.012,3.51-1.441c1.36.572,2.01,2.144,1.44,3.511s-2.15,2.012-3.51,1.44Z" fill="url(#bg-s-path48-fill)"/>
              <path id="bg-s-path49" d="M1008.35,201.807l.69,4.993c-1.96.294-3.95.357-5.93.187l.8-5.134c1.29.037,2.77.028,4.44-.046Z" fill="#fff"/>
              <path id="bg-s-path50" d="M989.265,203.809l4.714-3.28c.65.217,1.317.379,1.994.485l-1.929,4.872c-1.407-.242-2.925-.54-4.565-.931-.121-.027-.232-.089-.318-.178-.087-.09-.145-.202-.168-.324-.023-.123-.009-.249.039-.363.048-.115.129-.212.233-.281Z" fill="#fff"/>
              <path id="bg-s-path51" d="M1002.38,201.705l-.8,5.134c-2.207-.129-4.403-.39-6.578-.783l1.929-4.872c1.801.31,3.619.484,5.449.521Z" fill="#fff"/>
              <path id="bg-s-path52" d="M1058.04,209.885c.47.018.92-.146,1.27-.457s.56-.745.59-1.211l.11-1.565c.02-.468-.15-.926-.46-1.274-.32-.349-.75-.56-1.22-.589-.47-.021-.92.142-1.27.454s-.56.747-.59,1.213l-.11,1.566c-.02.468.15.926.46,1.274.31.349.75.56,1.22.589Z" fill="#fff"/>
              <path id="bg-s-path53" d="M1067.55,210.508c.47.018.92-.146,1.27-.457s.56-.745.6-1.211l.1-1.565c.02-.468-.15-.926-.46-1.274-.31-.349-.75-.56-1.22-.589-.47-.021-.92.142-1.27.454s-.56.747-.59,1.214l-.11,1.565c-.02.468.15.926.46,1.274.32.349.75.56,1.22.589Z" fill="#fff"/>
              <path id="bg-s-path54" d="M1077.07,211.133c.47.018.92-.146,1.27-.457s.56-.745.6-1.211l.1-1.565c.02-.468-.14-.926-.46-1.274-.31-.349-.75-.56-1.22-.589-.46-.021-.92.142-1.27.454s-.56.747-.59,1.214l-.1,1.565c-.02.468.14.926.45,1.274.32.349.76.56,1.22.589Z" fill="#fff"/>
              <path id="bg-s-path55" d="M1086.58,211.758c.46.023.92-.139,1.27-.452.35-.312.56-.749.59-1.216l.1-1.565c.03-.474-.12-.941-.44-1.299-.31-.358-.75-.578-1.22-.611-.47-.02-.93.144-1.28.457-.35.314-.56.752-.59,1.22l-.1,1.565c-.03.473.13.939.44,1.296.31.356.75.574,1.23.605Z" fill="#fff"/>
              <path id="bg-s-path56" d="M1096.09,212.381c.47.021.92-.142,1.27-.454s.56-.747.59-1.214l.11-1.565c.01-.466-.15-.921-.46-1.269s-.75-.561-1.21-.594c-.47-.021-.93.144-1.28.457-.35.314-.56.752-.59,1.22l-.1,1.556c-.02.466.15.921.46,1.269s.74.561,1.21.594Z" fill="#fff"/>
              <path id="bg-s-path57" d="M1105.6,213.004c.47.021.92-.142,1.27-.454s.56-.747.59-1.214l.11-1.565c.02-.466-.15-.921-.46-1.269-.31-.347-.75-.561-1.21-.594-.47-.02-.93.144-1.28.457-.34.314-.56.752-.58,1.22l-.11,1.556c-.01.466.15.921.46,1.269s.75.561,1.21.594Z" fill="#fff"/>
              <path id="bg-s-path58" d="M1115.11,213.631c.47.02.93-.144,1.28-.458.35-.313.56-.751.59-1.219l.1-1.556c.03-.474-.13-.941-.44-1.299s-.75-.577-1.23-.611c-.46-.02-.92.143-1.27.454-.35.312-.56.747-.59,1.214l-.1,1.565c-.03.474.12.941.44,1.299.31.358.75.577,1.22.611Z" fill="#fff"/>
              <path id="bg-s-path59" d="M1124.59,214.256c.47.02.93-.144,1.27-.458.35-.313.56-.751.59-1.219l.1-1.566c.03-.466-.14-.923-.45-1.271s-.75-.561-1.21-.592c-.47-.02-.93.143-1.27.454-.35.312-.56.748-.6,1.214l-.1,1.565c-.02.468.14.925.45,1.275.32.35.75.564,1.22.598Z" fill="#fff"/>
              <path id="bg-s-path60" d="M1134.14,214.869c.46.021.92-.142,1.27-.454s.56-.747.59-1.214l.1-1.565c.02-.467-.14-.923-.45-1.271s-.75-.561-1.21-.592c-.47-.018-.93.146-1.27.457-.35.311-.56.745-.6,1.211l-.1,1.565c-.02.467.14.923.45,1.271.32.348.75.561,1.22.592Z" fill="#fff"/>
              <path id="bg-s-path61" d="M1143.65,215.492c.47.021.92-.142,1.27-.454s.56-.747.59-1.214l.11-1.565c.02-.467-.15-.923-.46-1.271s-.75-.561-1.21-.592c-.47-.018-.92.146-1.27.457s-.56.745-.6,1.211l-.1,1.565c-.02.466.15.921.46,1.269.31.347.74.561,1.21.594Z" fill="#fff"/>
              <path id="bg-s-path62" d="M1153.16,216.117c.47.021.93-.142,1.27-.454.35-.312.57-.747.6-1.214l.1-1.565c.02-.467-.14-.923-.46-1.271-.31-.348-.74-.561-1.21-.592-.46-.018-.92.146-1.27.457s-.56.745-.59,1.211l-.1,1.565c-.02.467.14.923.45,1.271s.75.561,1.21.592Z" fill="#fff"/>
              <path id="bg-s-path63" d="M1162.68,216.742c.46.021.92-.142,1.27-.454.34-.312.56-.747.59-1.214l.1-1.565c.02-.467-.14-.923-.45-1.271s-.75-.561-1.22-.592c-.46-.018-.92.146-1.27.457-.34.311-.56.745-.59,1.211l-.1,1.565c-.02.467.14.923.45,1.271.31.349.75.561,1.22.592Z" fill="#fff"/>
              <path id="bg-s-path64" d="M1172.19,217.365c.46.02.92-.143,1.27-.455.35-.311.56-.747.59-1.213l.1-1.565c.03-.474-.12-.941-.44-1.299-.31-.358-.75-.578-1.23-.611-.46-.016-.92.15-1.26.463-.35.312-.56.747-.6,1.214l-.1,1.565c-.03.473.13.939.44,1.295.31.357.75.574,1.23.606Z" fill="#fff"/>
              <path id="bg-s-path65" d="M1181.7,217.989c.47.02.92-.143,1.27-.455.35-.311.56-.747.59-1.213l.1-1.565c.02-.467-.14-.922-.45-1.269-.31-.348-.75-.561-1.21-.595-.48-.03-.95.129-1.31.444-.35.314-.57.758-.6,1.233l-.11,1.566c-.01.472.16.931.48,1.278s.77.554,1.24.576Z" fill="#fff"/>
              <path id="bg-s-path66" d="M1191.2,218.613c.47.018.92-.146,1.27-.457s.56-.745.6-1.211l.1-1.565c.02-.466-.15-.921-.46-1.269-.31-.347-.74-.561-1.21-.594-.47-.018-.92.147-1.27.46s-.56.75-.59,1.217l-.1,1.556c-.02.466.14.921.45,1.269s.75.561,1.21.594Z" fill="#fff"/>
              <path id="bg-s-path67" d="M1200.71,219.24c.47.018.93-.147,1.28-.46.34-.314.56-.75.59-1.217l.1-1.556c.03-.474-.13-.941-.44-1.299s-.75-.577-1.23-.611c-.46-.018-.92.146-1.27.457-.34.311-.56.745-.59,1.211l-.1,1.565c-.03.474.12.941.44,1.299.31.358.75.577,1.22.611Z" fill="#fff"/>
              <path id="bg-s-path68" d="M1210.23,219.863c.46.018.92-.147,1.27-.461.35-.313.56-.749.59-1.216l.1-1.565c.02-.467-.14-.922-.45-1.269-.32-.348-.75-.561-1.22-.595-.46-.018-.92.146-1.26.457-.35.311-.57.745-.6,1.211l-.1,1.565c-.02.468.14.925.45,1.275s.75.564,1.22.598Z" fill="#fff"/>
              <path id="bg-s-path69" d="M1219.74,220.486c.47.016.92-.15,1.27-.463.35-.312.56-.748.59-1.214l.11-1.565c.02-.468-.15-.926-.46-1.275-.32-.348-.75-.56-1.22-.588-.47-.021-.92.142-1.27.454-.35.311-.56.747-.6,1.213l-.1,1.566c-.02.469.15.928.46,1.278s.75.563,1.22.594Z" fill="#fff"/>
              <path id="bg-s-path70" d="M1229.25,221.102c.48.031.94-.128,1.3-.44s.58-.754.61-1.228l.1-1.565c.02-.468-.14-.926-.45-1.275-.32-.348-.76-.56-1.22-.588-.47-.021-.93.142-1.27.454-.35.311-.57.747-.6,1.213l-.1,1.566c-.02.46.14.912.44,1.259.31.347.73.564,1.19.604Z" fill="#fff"/>
            </g>
          </g>
          <g id="bg-u-daraxt">
            <path id="bg-s-path71" d="M1351.53,898.693c-.92-.993-1.46-2.277-1.54-3.63-.07-1.353.34-2.689,1.14-3.775.81-1.086,1.98-1.855,3.3-2.172c1.31-.316,2.7-.162,3.91.437-.29-1.02-.31-2.101-.04-3.13.27-1.028.81-1.965,1.56-2.711c1.62-1.37,4.49-1.165,5.5.699-.26-1.179-.18-2.407.24-3.541.41-1.133,1.14-2.125,2.1-2.86c1-.678,2.21-.958,3.4-.786c1.2.172,2.28.785,3.05,1.718c0-2.795.15-5.889,1.95-8.069s5.92-2.496,7.08.075c.55-1.28,1.47-2.367,2.65-3.121c1.17-.754,2.54-1.141,3.93-1.111s2.75.476,3.89,1.28c1.13.803,2.01,1.929,2.5,3.231c1.25-1.359,2.85-2.355,4.62-2.881c1.77-.527,3.65-.564,5.45-.109c1.79.456,3.42,1.387,4.73,2.696c1.3,1.309,2.23,2.946,2.68,4.738.19.727.44,1.631,1.17,1.761.36.023.71-.045,1.04-.195c2.15-.643,4.5.652,5.78,2.497c1.15,1.937,1.88,4.091,2.15,6.326c2.5-2.19,7.21-.252,7.45,3.065c1.62-1.137,3.73-2.311,5.45-1.351.75.419,1.26,1.174,1.98,1.64.71.465,1.86.484,2.23-.308c1.08,1.69,1.77,3.6,2.02,5.59c1-.765,2.21-1.222,3.46-1.314c1.26-.092,2.52.185,3.62.796s2,1.53,2.58,2.645c.59,1.115.84,2.377.72,3.631l-101.75-1.761Z" fill="url(#bg-s-path71-fill)"/>
            <path id="bg-s-path72" d="M1406.04,828.992c1.86-3.196,2.61-7.295,1.01-10.649s-5.96-5.394-9.32-3.727c.87-9.673.19-19.422-2.02-28.881-1.21-5.18-3.08-10.575-7.28-13.836-6.42-4.975-16.58-2.795-21.78,3.457-5.19,6.251-6,15.289-3.81,23.115-5.71-1.584-12.61-1.314-16.61,3.065-4.53,4.975-3.4,12.717-1.97,19.295c1.21,5.59,2.79,11.692,7.45,14.906-5.72.652-12.58,2.199-14.34,7.677-.99,3.112.13,6.522,1.95,9.317c6.01,9.046,18.07,11.692,28.93,11.962h5.36c3.01.299,5.99-.931,8.7-2.058c2.71-1.128,5.73-2.059,8.57-3.159c4.49-1.723,9.31-4.071,11.41-8.646c2.26-4.854.75-11.543-4.04-13.928c2.99-2.264,5.89-4.714,7.79-7.91Z" fill="#dae3f2"/>
            <path id="bg-s-path73" d="M1376.4,898.477v-76.593c0-3.223-5.01-3.223-5.01,0v76.593c0,3.223,5.01,3.233,5.01,0Z" fill="#f8f5ff"/>
            <path id="bg-s-path74" d="M1376.81,846.368c2.73-1.253,5.15-3.086,7.1-5.37c1.95-2.285,3.38-4.967,4.19-7.86.13-.626.02-1.279-.31-1.825-.33-.547-.86-.945-1.48-1.115-.61-.169-1.27-.095-1.84.205-.56.301-.99.806-1.2,1.412-.17.615-.38,1.211-.6,1.863.23-.512-.22.653,0,0-.08.159-.14.317-.22.476-.09.158-.26.521-.4.782-.3.562-.63,1.106-.99,1.631l-.3.428c-.35.596-.08.112,0,0-.19.262-.39.508-.62.736-.42.482-.86.943-1.33,1.379l-.72.634c-.12.124-.26.233-.41.326.3-.224.25-.121,0,0-1.05.773-2.19,1.429-3.39,1.956-.57.332-1,.879-1.17,1.522-.18.643-.09,1.328.24,1.907.35.563.89.973,1.53,1.146s1.32.096,1.9-.215l.02-.018Z" fill="#f8f5ff"/>
            <path id="bg-s-path75" d="M1373.08,852.964c-1.48-.354-2.95-.708-4.39-1.184l-.94-.344-.52-.205-.13-.056c-.67-.309-1.32-.667-1.94-1.072-.14-.083-.27-.186-.41-.279-.12-.103-.14-.093,0,0-.26-.214-.51-.429-.75-.652-.24-.224-.47-.475-.68-.718c0-.056-.4-.484-.19-.205.22.28-.15-.223-.15-.223-.18-.269-.35-.549-.5-.839-.06-.111-.12-.233-.18-.344-.29-.569.15.475-.04-.121-.1-.28-.19-.55-.25-.83-.05-.154-.08-.313-.1-.475v.28-.392c.02-.341-.03-.683-.14-1.005-.12-.321-.3-.616-.53-.865-.24-.249-.52-.447-.84-.583-.31-.136-.65-.206-.99-.206s-.68.07-.99.206c-.32.136-.6.334-.83.583-.24.249-.42.544-.54.865-.11.322-.16.664-.14,1.005.16,1.754.7,3.449,1.6,4.963s2.12,2.808,3.59,3.786c2.79,2.049,6.32,2.907,9.63,3.726.63.142,1.29.036,1.84-.295s.96-.862,1.13-1.483c.17-.62.09-1.283-.21-1.851-.3-.567-.81-.996-1.43-1.197l.02.01Z" fill="#f8f5ff"/>
            <path id="bg-s-path76" d="M1479.4,816.565c-.37-3.886-4.35-7.51-8.39-6.634-2.24.484-5.02,2.003-6.41.307c4.42-4.118,8.93-8.385,11.41-13.714c2.49-5.329,2.52-12.111-1.58-16.434s-12.83-4.547-16.01.466c2.52-9.73,2.48-19.944-.1-29.655-1.29-4.836-3.35-9.708-7.3-13.044-3.95-3.335-10.2-4.658-14.77-2.077-2.49,1.606-4.44,3.924-5.59,6.652-4.28,8.851-4.13,18.931-3.44,28.593-3.14-3.913-10.4-2.795-13.47,1.22-3.07,4.016-2.79,9.466-1.17,14.115s4.4,8.869,6.08,13.509c-2.55-2.543-7.54-1.314-9.63,1.593-2.1,2.907-1.99,6.717-1.35,10.155c1.66,8.611,6.04,16.464,12.48,22.416-3.05-2.795-8.56-1.565-11.18,1.565-2.62,3.131-3,7.454-2.55,11.376c1.73,15.289,12.81,29.907,38.96,28.574c10.19-1.155,20.17-6.521,24.86-15.065c4.68-8.543,2.88-20.198-5.26-25.975c3.04-2.683,6.62-4.816,9.55-7.593c2.94-2.776,5.22-6.475,4.86-10.35Z" fill="#dae3f2"/>
            <path id="bg-s-path77" d="M1442.47,900.201v-118.434c0-3.223-5-3.223-5,0v118.434c0,3.214,5,3.224,5,0Z" fill="#f8f5ff"/>
            <path id="bg-s-path78" d="M1441.87,827.783c4.58-1.609,8.71-4.319,12-7.893s5.66-7.901,6.89-12.603c.11-.323.15-.663.12-1.001s-.13-.667-.29-.966-.38-.562-.64-.774c-.27-.212-.57-.367-.9-.458-.33-.09-.67-.113-1.01-.067-.33.046-.66.159-.95.334-.29.174-.54.406-.74.681s-.34.587-.41.918c-.98,3.874-2.9,7.446-5.59,10.398-.69.747-1.41,1.457-2.17,2.124-.73.652-1.51,1.247-2.33,1.78-1.66,1.111-3.44,2.013-5.31,2.683-.64.189-1.17.614-1.49,1.187-.33.573-.42,1.249-.26,1.887.18.638.61,1.18,1.18,1.508.58.328,1.26.415,1.9.244v.018Z" fill="#f8f5ff"/>
            <path id="bg-s-path79" d="M1438.05,847.356c-3.43-.512-5.93-3.279-7.59-6.223-1.72-3.047-2.48-6.54-2.18-10.025-.01-.661-.27-1.293-.74-1.76s-1.1-.732-1.76-.737c-.66.012-1.29.279-1.76.744-.46.465-.73,1.094-.75,1.753-.31,4.476.74,8.941,3.01,12.81c2.23,3.802,5.9,7.593,10.44,8.264.64.156,1.31.062,1.88-.261.58-.324,1-.853,1.2-1.481.17-.641.08-1.323-.25-1.899-.32-.577-.86-1.002-1.5-1.185Z" fill="#f8f5ff"/>
            <path id="bg-s-path80" d="M1441.58,797.363c-1.12-.909-2.19-1.885-3.19-2.925-.51-.531-1.01-1.081-1.49-1.649l-.67-.811c-.09-.121-.32-.428-.11-.14l-.35-.475c-.85-1.162-1.63-2.379-2.33-3.643-.35-.614-.67-1.229-.94-1.863-.16-.354-.32-.708-.48-1.062-.08-.177-.13-.298,0-.056-.09-.214-.18-.429-.26-.652-.19-.63-.62-1.163-1.2-1.487-.57-.324-1.25-.416-1.88-.255-1.18.382-2.27,1.77-1.75,3.074c2.34,6.037,6.19,11.371,11.18,15.484.48.454,1.11.707,1.77.707s1.3-.253,1.77-.707c.84-.931,1.09-2.655,0-3.54h-.07Z" fill="#f8f5ff"/>
          </g>
          <g id="bg-u-city_to" transform="translate(2530,669.352173)">
            <g id="bg-u-city" transform="translate(-2236.551818,-669.352173)">
              <path id="bg-s-path83" d="M2203.18,899.239h-72.11v-306.351l72.11-72.111v378.462Z" fill="#e7eefe"/>
              <path id="bg-s-path84" d="M2158.57,597.369h-13.85v18.736h13.85v-18.736Z" fill="#fff"/>
              <path id="bg-s-path85" d="M2189.53,597.369h-13.85v18.736h13.85v-18.736Z" fill="#fff"/>
              <path id="bg-s-path86" d="M2158.57,648.277l-13.85,1.286v-18.746l13.85-1.276v18.736Z" fill="#fff"/>
              <path id="bg-s-path87" d="M2189.53,629.541h-13.85v18.736h13.85v-18.736Z" fill="#fff"/>
              <path id="bg-s-path88" d="M2158.57,681.733l-13.85,1.277v-18.736l13.85-1.286v18.745Z" fill="#fff"/>
              <path id="bg-s-path89" d="M2189.53,662.988h-13.85v18.736h13.85v-18.736Z" fill="#fff"/>
              <path id="bg-s-path90" d="M2158.57,696.443h-13.85v18.736h13.85v-18.736Z" fill="#fff"/>
              <path id="bg-s-path91" d="M2189.53,716.465h-13.85v-20.022l13.85,1.277v18.745Z" fill="#fff"/>
              <path id="bg-s-path92" d="M2290.21,493.891h-86.78v405.35h86.78v-405.35Z" fill="#cbdbfd"/>
              <path id="bg-s-path93" d="M2263.92,475.564h-34.22v18.336h34.22v-18.336Z" fill="#cbdbfd"/>
              <path id="bg-s-path94" d="M2248.11,435.232h-2.59v40.332h2.59v-40.332Z" fill="#cbdbfd"/>
              <path id="bg-s-path95" d="M2231.26,526.732h-13.85v18.736h13.85v-18.736Z" fill="#fff"/>
              <path id="bg-s-path96" d="M2272.32,528.893h-13.86v18.735h13.86v-18.735Z" fill="#fff"/>
              <path id="bg-s-path97" d="M2231.26,558.762h-13.85v18.736h13.85v-18.736Z" fill="#fff"/>
              <path id="bg-s-path98" d="M2271.01,559.611h-13.86v18.736h13.86v-18.736Z" fill="#fff"/>
              <path id="bg-s-path99" d="M2231.26,590.801h-13.85v18.736h13.85v-18.736Z" fill="#fff"/>
              <path id="bg-s-path100" d="M2271.01,591.65h-13.86v18.736h13.86v-18.736Z" fill="#fff"/>
              <path id="bg-s-path101" d="M2231.26,622.834h-13.85v18.736h13.85v-18.736Z" fill="#fff"/>
              <path id="bg-s-path102" d="M2271.01,623.68h-13.86v18.736h13.86v-18.736Z" fill="#fff"/>
              <path id="bg-s-path103" d="M2231.26,654.873h-13.85v18.736h13.85v-18.736Z" fill="#fff"/>
              <path id="bg-s-path104" d="M2271.01,655.721h-13.86v18.736h13.86v-18.736Z" fill="#fff"/>
              <path id="bg-s-path105" d="M2231.26,686.904h-13.85v18.736h13.85v-18.736Z" fill="#fff"/>
              <path id="bg-s-path106" d="M2271.01,687.752h-13.86v18.736h13.86v-18.736Z" fill="#fff"/>
              <path id="bg-s-path107" d="M2352.28,616.107h-62.07v283.134h62.07v-283.134Z" fill="#e7eefe"/>
              <path id="bg-s-path108" d="M2314.87,656.102h-13.86v18.735h13.86v-18.735Z" fill="#fff"/>
              <path id="bg-s-path109" d="M2340.76,656.102h-13.86v18.735h13.86v-18.735Z" fill="#fff"/>
              <path id="bg-s-path110" d="M2314.87,686.316h-13.86v18.736h13.86v-18.736Z" fill="#fff"/>
              <path id="bg-s-path111" d="M2340.76,686.316h-13.86v18.736h13.86v-18.736Z" fill="#fff"/>
              <path id="bg-s-path112" d="M2314.87,716.531h-13.86v18.736h13.86v-18.736Z" fill="#fff"/>
              <path id="bg-s-path113" d="M2340.76,716.531h-13.86v18.736h13.86v-18.736Z" fill="#fff"/>
              <path id="bg-s-path114" d="M2314.87,746.744h-13.86v18.736h13.86v-18.736Z" fill="#fff"/>
              <path id="bg-s-path115" d="M2340.76,746.744h-13.86v18.736h13.86v-18.736Z" fill="#fff"/>
              <path id="bg-s-path116" d="M2419.95,899.24h-67.67v-303.91c8.89.001,17.7,1.754,25.91,5.158s15.67,8.392,21.95,14.681c6.29,6.288,11.27,13.752,14.67,21.967c3.4,8.214,5.15,17.018,5.14,25.908v236.196Z" fill="#cbdbfd"/>
              <path id="bg-s-path117" d="M2377.57,676.879h-13.86v18.736h13.86v-18.736Z" fill="#fff"/>
              <path id="bg-s-path118" d="M2408.53,676.879h-13.85v18.736h13.85v-18.736Z" fill="#fff"/>
              <path id="bg-s-path119" d="M2377.57,710.326h-13.86v18.736h13.86v-18.736Z" fill="#fff"/>
              <path id="bg-s-path120" d="M2408.53,710.326h-13.85v18.736h13.85v-18.736Z" fill="#fff"/>
              <path id="bg-s-path121" d="M2377.57,743.783h-13.86v18.736h13.86v-18.736Z" fill="#fff"/>
              <path id="bg-s-path122" d="M2408.53,743.783h-13.85v18.736h13.85v-18.736Z" fill="#fff"/>
              <path id="bg-s-path123" d="M2377.57,777.229h-13.86v18.735h13.86v-18.735Z" fill="#fff"/>
              <path id="bg-s-path124" d="M2408.53,777.229h-13.85v18.735h13.85v-18.735Z" fill="#fff"/>
              <path id="bg-s-path125" d="M2131.07,649.562h-81.47v249.687h81.47v-249.687Z" fill="#cbdbfd"/>
              <path id="bg-s-path126" d="M2079.38,682.516h-13.85v18.735h13.85v-18.735Z" fill="#fff"/>
              <path id="bg-s-path127" d="M2110.34,682.516h-13.86v18.735h13.86v-18.735Z" fill="#fff"/>
              <path id="bg-s-path128" d="M2079.38,717.686h-13.85v18.735h13.85v-18.735Z" fill="#fff"/>
              <path id="bg-s-path129" d="M2110.34,717.686h-13.86v18.735h13.86v-18.735Z" fill="#fff"/>
              <path id="bg-s-path130" d="M2079.38,752.857h-13.85v18.736h13.85v-18.736Z" fill="#fff"/>
              <path id="bg-s-path131" d="M2110.34,752.857h-13.86v18.736h13.86v-18.736Z" fill="#fff"/>
              <path id="bg-s-path132" d="M2079.38,788.027h-13.85v18.736h13.85v-18.736Z" fill="#fff"/>
              <path id="bg-s-path133" d="M2110.34,788.027h-13.86v18.736h13.86v-18.736Z" fill="#fff"/>
              <path id="bg-s-path134" d="M2281.72,643.245c1.45-5.529,1.61-11.317.47-16.919-1.14-5.601-3.55-10.867-7.04-15.392s-7.97-8.189-13.1-10.71-10.77-3.831-16.49-3.831-11.36,1.31-16.49,3.831-9.61,6.185-13.1,10.71-5.9,9.791-7.04,15.392c-1.14,5.602-.98,11.39.47,16.919.95,3.621,2.45,7.077,4.44,10.248c6.7,14.814,15.76,31.761,31.67,57.764c14.47-24.764,26.04-45.457,32.19-58.509c1.75-2.95,3.08-6.13,3.95-9.447l.07-.056Z" fill="url(#bg-s-path134-fill)"/>
              <path id="bg-s-path135" d="M2252.31,650.128c9.05-3.749,13.35-14.126,9.6-23.177-3.75-9.052-14.12-13.35-23.18-9.601-9.05,3.749-13.35,14.126-9.6,23.177c3.75,9.052,14.13,13.35,23.18,9.601Z" fill="#fff"/>
              <path id="bg-s-path136" d="M2243.45,804.733h90.12L2288.5,767l-45.05-37.732L2198.39,767l-45.06,37.733h90.12Z" fill="url(#bg-s-path136-fill)"/>
              <path id="bg-s-path137" d="M2315.15,804.732h-143.4v94.518h143.4v-94.518Z" fill="url(#bg-s-path137-fill)"/>
              <path id="bg-s-path138" d="M2243.92,772.56h-8.9v10.128h8.9v-10.128Z" fill="#fff"/>
              <path id="bg-s-path139" d="M2255.74,772.56h-8.9v10.128h8.9v-10.128Z" fill="#fff"/>
              <path id="bg-s-path140" d="M2243.92,785.027h-8.9v10.128h8.9v-10.128Z" fill="#fff"/>
              <path id="bg-s-path141" d="M2255.74,785.027h-8.9v10.128h8.9v-10.128Z" fill="#fff"/>
              <path id="bg-s-path142" d="M2265.4,835.152h-36.92v64.099h36.92v-64.099Z" fill="#fff"/>
              <path id="bg-s-path143" d="M1876.57,897.228c-1.82-1.973-2.89-4.521-3.04-7.203-.14-2.682.66-5.33,2.27-7.483c1.6-2.154,3.91-3.678,6.52-4.309s5.36-.328,7.77.855c-1-4.081-.19-8.86,3-11.59c3.2-2.73,8.92-2.32,10.91,1.379-.93-4.658.72-9.978,4.66-12.689s10.01-2.106,12.79,1.77c.08-5.59.32-11.683,3.89-16.016c3.57-4.332,11.75-4.947,14.07.159c1.08-2.545,2.91-4.706,5.23-6.206c2.33-1.5,5.05-2.269,7.82-2.21s5.45.944,7.71,2.542s3.99,3.835,4.97,6.424c2.48-2.702,5.65-4.68,9.17-5.727c3.51-1.046,7.25-1.121,10.81-.216c3.55.904,6.8,2.754,9.39,5.354s4.42,5.852,5.31,9.411c.37,1.444.86,3.233,2.32,3.485.71.034,1.42-.096,2.06-.382c4.27-1.286,8.94,1.286,11.48,4.947c2.55,3.661,3.43,8.189,4.26,12.559c4.97-4.342,14.3-.503,14.77,6.074c3.22-2.245,7.38-4.574,10.81-2.664c1.49.82,2.5,2.32,3.93,3.242c1.42.922,3.72.932,4.43-.606c2.16,3.379,3.53,7.2,4.01,11.18c1.98-1.521,4.37-2.429,6.87-2.613c2.49-.183,4.99.367,7.18,1.582c2.18,1.215,3.97,3.043,5.13,5.258c1.17,2.216,1.66,4.723,1.42,7.214l-201.92-3.521Z" fill="url(#bg-s-path143-fill)"/>
              <path id="bg-s-path144" d="M2397.62,899.128c-1.82-1.972-2.9-4.521-3.04-7.203s.66-5.329,2.26-7.483c1.61-2.154,3.92-3.678,6.53-4.309s5.36-.328,7.77.855c-1.01-4.08-.2-8.86,3-11.59c3.19-2.729,8.91-2.32,10.91,1.379-.93-4.658.72-9.978,4.66-12.689s10-2.106,12.79,1.77c.07-5.59.31-11.683,3.88-16.006s11.75-4.956,14.06.149c1.09-2.544,2.92-4.704,5.24-6.203c2.33-1.499,5.05-2.268,7.82-2.209s5.45.944,7.71,2.541s3.99,3.833,4.97,6.421c2.49-2.702,5.66-4.68,9.17-5.726c3.52-1.047,7.25-1.122,10.81-.217s6.8,2.755,9.39,5.354c2.59,2.6,4.43,5.852,5.32,9.412.36,1.444.86,3.233,2.32,3.484.71.034,1.41-.094,2.06-.373c4.27-1.295,8.93,1.277,11.48,4.938c2.54,3.662,3.43,8.19,4.25,12.569c4.96-4.351,14.31-.513,14.77,6.065c3.22-2.246,7.39-4.575,10.82-2.665c1.48.82,2.5,2.32,3.92,3.242c1.43.923,3.73.932,4.44-.605c2.15,3.381,3.52,7.201,4,11.18c1.99-1.522,4.38-2.43,6.87-2.613c2.5-.184,4.99.366,7.18,1.581s3.97,3.043,5.14,5.259c1.16,2.215,1.65,4.723,1.41,7.214l-201.91-3.522Z" fill="url(#bg-s-path144-fill)"/>
              <path id="bg-s-path145" d="M2042.19,857.157c-.83-6.671-6.46-13.202-13.16-12.624c2.74-2.463,4.94-5.461,6.47-8.809s2.36-6.974,2.43-10.654c.06-4.37-1.19-9.075-4.61-11.804-2.93-2.339-7.67-2.423-10.31,0c2.35-3.142,3.94-6.786,4.63-10.645.7-3.858.5-7.827-.6-11.592-1.09-3.765-3.05-7.225-5.71-10.106-2.66-2.882-5.95-5.106-9.62-6.499-4.27-1.63-9.22-2.031-13.34-.055-4.38,2.087-7.2,6.521-8.83,11.077-3.08,8.609-2.64,18.028-2.15,27.158-5.21-.976-10.59-.001-15.12,2.739-1.62.988-3.24,2.218-3.81,4.1-.3,1.217-.42,2.473-.36,3.726.02,5.21.6,10.402,1.74,15.485.53,2.308,1.29,4.553,2.3,6.698.54,1.137,2.54,5.59,3.91,5.833-4.3-.662-8.46,2.506-10.25,6.437-1.79,3.932-1.81,8.46-1.57,12.792.4,7.099,1.61,14.804,6.82,19.649c5.59,5.236,13.73,5.665,20.95,6.578c8.08,1.024,16.43.829,24.22-1.808c9.57-3.242,17-9.447,21.36-18.54c2.78-5.916,5.44-12.456,4.61-19.136Z" fill="#dae3f2"/>
              <path id="bg-s-path146" d="M2005.95,900.425v-56.636c0-4.081-6.34-4.09-6.34,0v56.626c0,4.072,6.34,4.081,6.34,0v.01Z" fill="#f8f5ff"/>
              <path id="bg-s-path147" d="M2005.64,880.754c7.07-1.207,13.56-4.672,18.49-9.876.6-.594.93-1.4.93-2.24c0-.841-.33-1.647-.93-2.241-.59-.594-1.4-.928-2.24-.928s-1.65.334-2.24.928c-.54.568-1.1,1.118-1.69,1.649-.3.279-.61.55-.93.82l-.43.354c-.26.196-.21.168,0,0-1.29.974-2.66,1.846-4.09,2.608-.7.373-1.4.699-2.12,1.025.26-.102.28-.13,0,0l-.52.205-1.18.42c-1.53.509-3.11.895-4.7,1.155-.81.226-1.5.762-1.91,1.491-.42.729-.53,1.593-.31,2.403.25.796.79,1.469,1.51,1.881s1.58.532,2.39.337l-.03.009Z" fill="#f8f5ff"/>
              <path id="bg-s-path148" d="M2001.16,863.939c0,0-.79.168-.3.075s-.2,0-.3,0c-.41,0-.8,0-1.21,0-.55,0,.13,0,.12,0l-.58-.121c-.4-.091-.79-.206-1.18-.345-.63-.065-.23-.084,0,0-.16-.048-.31-.121-.45-.214-.37-.181-.73-.38-1.09-.596-.35-.209-.7-.442-1.02-.699.22.167.32.27,0,0-.22-.168-.31-.27-.46-.419-.59-.592-1.16-1.214-1.69-1.864-.32-.363.42.587-.07-.084l-.39-.54c-.22-.317-.45-.652-.66-.932-.93-1.49-1.79-3.046-2.62-4.602-.43-.72-1.12-1.242-1.93-1.454-.81-.213-1.67-.099-2.4.317-.71.436-1.23,1.13-1.44,1.938-.21.807-.1,1.665.3,2.394c1.87,3.513,3.88,7.212,6.97,9.811c3.4,2.87,7.72,4.453,12.16,3.475.81-.228,1.49-.765,1.9-1.493.42-.729.53-1.591.32-2.401-.24-.801-.78-1.478-1.51-1.891s-1.59-.53-2.4-.327l-.07-.028Z" fill="#f8f5ff"/>
              <path id="bg-s-path149" d="M2486.63,853.961c-.83-6.67-6.46-13.201-13.15-12.624c2.73-2.462,4.93-5.46,6.46-8.808s2.36-6.974,2.43-10.654c.06-4.37-1.19-9.075-4.61-11.805-2.92-2.338-7.67-2.422-10.29,0c2.34-3.142,3.93-6.786,4.63-10.646.69-3.859.49-7.827-.61-11.593-1.1-3.765-3.05-7.225-5.71-10.106s-5.96-5.104-9.62-6.496c-4.28-1.63-9.22-2.031-13.35-.056-4.37,2.087-7.2,6.522-8.83,11.078-3.07,8.608-2.63,18.028-2.15,27.158-5.2-.977-10.58-.001-15.11,2.739-1.62.978-3.24,2.217-3.81,4.099-.31,1.217-.43,2.474-.36,3.727.02,5.209.6,10.401,1.74,15.484.52,2.309,1.29,4.554,2.29,6.699.54,1.137,2.54,5.59,3.91,5.832-4.28-.661-8.45,2.507-10.25,6.438-1.8,3.932-1.86,8.46-1.57,12.792.39,7.099,1.6,14.804,6.82,19.649c5.59,5.236,13.72,5.664,20.94,6.577c8.08,1.025,16.44.83,24.23-1.807c9.57-3.242,17-9.447,21.36-18.54c2.8-5.916,5.44-12.457,4.61-19.137Z" fill="#dae3f2"/>
              <path id="bg-s-path150" d="M2450.35,897.228v-56.627c0-4.081-6.33-4.09-6.33,0v56.627c0,4.071,6.33,4.081,6.33,0Z" fill="#f8f5ff"/>
              <path id="bg-s-path151" d="M2450.09,877.56c7.07-1.207,13.55-4.672,18.49-9.875.59-.594.92-1.4.92-2.241c0-.84-.33-1.646-.92-2.241-.6-.594-1.41-.928-2.25-.928s-1.64.334-2.24.928c-.54.572-1.1,1.122-1.67,1.649-.32.28-.63.55-.93.82l-.43.354c-.26.196-.22.168,0,0-1.3.974-2.66,1.847-4.09,2.609-.7.373-1.41.699-2.13,1.025.26-.103.28-.131,0,0l-.52.205c-.38.149-.77.289-1.17.419-1.54.51-3.11.896-4.71,1.155-.81.225-1.5.76-1.91,1.49-.42.73-.53,1.594-.31,2.405.25.798.79,1.472,1.52,1.884.72.412,1.58.532,2.39.333l-.04.009Z" transform="translate(.000001 0)" fill="#f8f5ff"/>
              <path id="bg-s-path152" d="M2445.6,860.744c0,0-.79.168-.3.074.49-.093-.19,0-.3,0-.4.024-.81.024-1.21,0-.55,0,.13,0,.13,0l-.59-.121c-.4-.09-.79-.206-1.18-.344-.62-.066-.23-.084,0,0-.16-.049-.31-.121-.45-.215-.37-.178-.73-.377-1.08-.596-.36-.206-.7-.439-1.02-.699.31.271.21.168,0-.056-.22-.223-.31-.27-.46-.409-.59-.592-1.16-1.214-1.69-1.864-.32-.363.43.587-.07-.084l-.39-.54c-.22-.317-.45-.652-.66-.932-.93-1.49-1.79-3.046-2.62-4.602-.43-.72-1.12-1.242-1.93-1.455-.81-.212-1.67-.098-2.4.318-.71.437-1.23,1.132-1.44,1.939-.21.806-.1,1.664.3,2.393c1.87,3.513,3.88,7.202,6.97,9.811c3.4,2.869,7.72,4.453,12.16,3.475.81-.229,1.49-.765,1.9-1.493.42-.729.53-1.591.32-2.401-.24-.801-.78-1.478-1.51-1.891s-1.59-.53-2.4-.327l-.08.019Z" fill="#f8f5ff"/>
            </g>
          </g>
          <path id="bg-s-path153" d="M2658.87,898.611L255.174,902.807l.006,3.801l2403.7-4.195-.01-3.802Z" fill="url(#bg-s-path153-fill)"/>

            <g id="bg-s-g11_to" transform="translate(380.5,792.636658)">

            <g id="bg-s-g11" transform="translate(-1500.5,-792.636657)">
              <g id="bg-u-moto" transform="translate(.000001 0.000001)">
                  <path id="bg-s-path71" d="M1351.53,898.693c-.92-.993-1.46-2.277-1.54-3.63-.07-1.353.34-2.689,1.14-3.775.81-1.086,1.98-1.855,3.3-2.172c1.31-.316,2.7-.162,3.91.437-.29-1.02-.31-2.101-.04-3.13.27-1.028.81-1.965,1.56-2.711c1.62-1.37,4.49-1.165,5.5.699-.26-1.179-.18-2.407.24-3.541.41-1.133,1.14-2.125,2.1-2.86c1-.678,2.21-.958,3.4-.786c1.2.172,2.28.785,3.05,1.718c0-2.795.15-5.889,1.95-8.069s5.92-2.496,7.08.075c.55-1.28,1.47-2.367,2.65-3.121c1.17-.754,2.54-1.141,3.93-1.111s2.75.476,3.89,1.28c1.13.803,2.01,1.929,2.5,3.231c1.25-1.359,2.85-2.355,4.62-2.881c1.77-.527,3.65-.564,5.45-.109c1.79.456,3.42,1.387,4.73,2.696c1.3,1.309,2.23,2.946,2.68,4.738.19.727.44,1.631,1.17,1.761.36.023.71-.045,1.04-.195c2.15-.643,4.5.652,5.78,2.497c1.15,1.937,1.88,4.091,2.15,6.326c2.5-2.19,7.21-.252,7.45,3.065c1.62-1.137,3.73-2.311,5.45-1.351.75.419,1.26,1.174,1.98,1.64.71.465,1.86.484,2.23-.308c1.08,1.69,1.77,3.6,2.02,5.59c1-.765,2.21-1.222,3.46-1.314c1.26-.092,2.52.185,3.62.796s2,1.53,2.58,2.645c.59,1.115.84,2.377.72,3.631l-101.75-1.761Z" fill="url(#bg-s-path71-fill)"/>
                  <path id="bg-s-path72" d="M1406.04,828.992c1.86-3.196,2.61-7.295,1.01-10.649s-5.96-5.394-9.32-3.727c.87-9.673.19-19.422-2.02-28.881-1.21-5.18-3.08-10.575-7.28-13.836-6.42-4.975-16.58-2.795-21.78,3.457-5.19,6.251-6,15.289-3.81,23.115-5.71-1.584-12.61-1.314-16.61,3.065-4.53,4.975-3.4,12.717-1.97,19.295c1.21,5.59,2.79,11.692,7.45,14.906-5.72.652-12.58,2.199-14.34,7.677-.99,3.112.13,6.522,1.95,9.317c6.01,9.046,18.07,11.692,28.93,11.962h5.36c3.01.299,5.99-.931,8.7-2.058c2.71-1.128,5.73-2.059,8.57-3.159c4.49-1.723,9.31-4.071,11.41-8.646c2.26-4.854.75-11.543-4.04-13.928c2.99-2.264,5.89-4.714,7.79-7.91Z" fill="#dae3f2"/>
                  <path id="bg-s-path73" d="M1376.4,898.477v-76.593c0-3.223-5.01-3.223-5.01,0v76.593c0,3.223,5.01,3.233,5.01,0Z" fill="#f8f5ff"/>
                  <path id="bg-s-path74" d="M1376.81,846.368c2.73-1.253,5.15-3.086,7.1-5.37c1.95-2.285,3.38-4.967,4.19-7.86.13-.626.02-1.279-.31-1.825-.33-.547-.86-.945-1.48-1.115-.61-.169-1.27-.095-1.84.205-.56.301-.99.806-1.2,1.412-.17.615-.38,1.211-.6,1.863.23-.512-.22.653,0,0-.08.159-.14.317-.22.476-.09.158-.26.521-.4.782-.3.562-.63,1.106-.99,1.631l-.3.428c-.35.596-.08.112,0,0-.19.262-.39.508-.62.736-.42.482-.86.943-1.33,1.379l-.72.634c-.12.124-.26.233-.41.326.3-.224.25-.121,0,0-1.05.773-2.19,1.429-3.39,1.956-.57.332-1,.879-1.17,1.522-.18.643-.09,1.328.24,1.907.35.563.89.973,1.53,1.146s1.32.096,1.9-.215l.02-.018Z" fill="#f8f5ff"/>
                  <path id="bg-s-path75" d="M1373.08,852.964c-1.48-.354-2.95-.708-4.39-1.184l-.94-.344-.52-.205-.13-.056c-.67-.309-1.32-.667-1.94-1.072-.14-.083-.27-.186-.41-.279-.12-.103-.14-.093,0,0-.26-.214-.51-.429-.75-.652-.24-.224-.47-.475-.68-.718c0-.056-.4-.484-.19-.205.22.28-.15-.223-.15-.223-.18-.269-.35-.549-.5-.839-.06-.111-.12-.233-.18-.344-.29-.569.15.475-.04-.121-.1-.28-.19-.55-.25-.83-.05-.154-.08-.313-.1-.475v.28-.392c.02-.341-.03-.683-.14-1.005-.12-.321-.3-.616-.53-.865-.24-.249-.52-.447-.84-.583-.31-.136-.65-.206-.99-.206s-.68.07-.99.206c-.32.136-.6.334-.83.583-.24.249-.42.544-.54.865-.11.322-.16.664-.14,1.005.16,1.754.7,3.449,1.6,4.963s2.12,2.808,3.59,3.786c2.79,2.049,6.32,2.907,9.63,3.726.63.142,1.29.036,1.84-.295s.96-.862,1.13-1.483c.17-.62.09-1.283-.21-1.851-.3-.567-.81-.996-1.43-1.197l.02.01Z" fill="#f8f5ff"/>
                  <path id="bg-s-path76" d="M1479.4,816.565c-.37-3.886-4.35-7.51-8.39-6.634-2.24.484-5.02,2.003-6.41.307c4.42-4.118,8.93-8.385,11.41-13.714c2.49-5.329,2.52-12.111-1.58-16.434s-12.83-4.547-16.01.466c2.52-9.73,2.48-19.944-.1-29.655-1.29-4.836-3.35-9.708-7.3-13.044-3.95-3.335-10.2-4.658-14.77-2.077-2.49,1.606-4.44,3.924-5.59,6.652-4.28,8.851-4.13,18.931-3.44,28.593-3.14-3.913-10.4-2.795-13.47,1.22-3.07,4.016-2.79,9.466-1.17,14.115s4.4,8.869,6.08,13.509c-2.55-2.543-7.54-1.314-9.63,1.593-2.1,2.907-1.99,6.717-1.35,10.155c1.66,8.611,6.04,16.464,12.48,22.416-3.05-2.795-8.56-1.565-11.18,1.565-2.62,3.131-3,7.454-2.55,11.376c1.73,15.289,12.81,29.907,38.96,28.574c10.19-1.155,20.17-6.521,24.86-15.065c4.68-8.543,2.88-20.198-5.26-25.975c3.04-2.683,6.62-4.816,9.55-7.593c2.94-2.776,5.22-6.475,4.86-10.35Z" fill="#dae3f2"/>
                  <path id="bg-s-path77" d="M1442.47,900.201v-118.434c0-3.223-5-3.223-5,0v118.434c0,3.214,5,3.224,5,0Z" fill="#f8f5ff"/>
                  <path id="bg-s-path78" d="M1441.87,827.783c4.58-1.609,8.71-4.319,12-7.893s5.66-7.901,6.89-12.603c.11-.323.15-.663.12-1.001s-.13-.667-.29-.966-.38-.562-.64-.774c-.27-.212-.57-.367-.9-.458-.33-.09-.67-.113-1.01-.067-.33.046-.66.159-.95.334-.29.174-.54.406-.74.681s-.34.587-.41.918c-.98,3.874-2.9,7.446-5.59,10.398-.69.747-1.41,1.457-2.17,2.124-.73.652-1.51,1.247-2.33,1.78-1.66,1.111-3.44,2.013-5.31,2.683-.64.189-1.17.614-1.49,1.187-.33.573-.42,1.249-.26,1.887.18.638.61,1.18,1.18,1.508.58.328,1.26.415,1.9.244v.018Z" fill="#f8f5ff"/>
                  <path id="bg-s-path79" d="M1438.05,847.356c-3.43-.512-5.93-3.279-7.59-6.223-1.72-3.047-2.48-6.54-2.18-10.025-.01-.661-.27-1.293-.74-1.76s-1.1-.732-1.76-.737c-.66.012-1.29.279-1.76.744-.46.465-.73,1.094-.75,1.753-.31,4.476.74,8.941,3.01,12.81c2.23,3.802,5.9,7.593,10.44,8.264.64.156,1.31.062,1.88-.261.58-.324,1-.853,1.2-1.481.17-.641.08-1.323-.25-1.899-.32-.577-.86-1.002-1.5-1.185Z" fill="#f8f5ff"/>
                  <path id="bg-s-path80" d="M1441.58,797.363c-1.12-.909-2.19-1.885-3.19-2.925-.51-.531-1.01-1.081-1.49-1.649l-.67-.811c-.09-.121-.32-.428-.11-.14l-.35-.475c-.85-1.162-1.63-2.379-2.33-3.643-.35-.614-.67-1.229-.94-1.863-.16-.354-.32-.708-.48-1.062-.08-.177-.13-.298,0-.056-.09-.214-.18-.429-.26-.652-.19-.63-.62-1.163-1.2-1.487-.57-.324-1.25-.416-1.88-.255-1.18.382-2.27,1.77-1.75,3.074c2.34,6.037,6.19,11.371,11.18,15.484.48.454,1.11.707,1.77.707s1.3-.253,1.77-.707c.84-.931,1.09-2.655,0-3.54h-.07Z" fill="#f8f5ff"/>
              </g>
            </g>
          </g>

        </svg>
      </div>
    </div>

<script src="js/jquery.min.js"></script>

    <script type="text/javascript" src="js/script.js"></script>


</body></html>
