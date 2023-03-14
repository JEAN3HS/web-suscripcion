<x-layouts.app title="plans" meta-description="plans meta description">

<style>
 
.pricing-table-subtitle {
  margin-top: 68px;
  font-weight: normal; }

.pricing-table-title {
  font-weight: bold;
  margin-bottom: 68px; }

.pricing-card {
  border: none;
  border-radius: 10px;
  margin-bottom: 40px;
  text-align: center;
  -webkit-transition: all 0.6s;
  transition: all 0.6s; }
  .pricing-card:hover {
    box-shadow: 0 2px 40px 0 rgba(205, 205, 205, 0.55); }
  .pricing-card.pricing-card-highlighted {
    box-shadow: 0 2px 40px 0 rgba(205, 205, 205, 0.55); }
  .pricing-card:hover {
    box-shadow: 0 2px 40px 0 rgba(205, 205, 205, 0.55);
    -webkit-transform: translateY(-10px);
            transform: translateY(-10px); }
  .pricing-card .card-body {
    padding-top: 55px;
    padding-bottom: 62px; }

.pricing-plan-title {
  font-size: 20px;
  color: white;
  text-shadow: while 0 -2px;
  margin-bottom: 11px;
  font-weight: normal; }

.pricing-plan-cost {
  font-size: 50px;
  color: white;
  font-weight: bold;
  margin-bottom: 29px; }

.pricing-plan-icon {
  display: inline-block;
  width: 40px;
  height: 40px;
  font-size: 40px;
  line-height: 1;
  margin-bottom: 24px; }
  .pricing-plan-basic .pricing-plan-icon {
    color: #fe397a; }
  .pricing-plan-pro .pricing-plan-icon {
    color: #10bb87; }
  .pricing-plan-enterprise .pricing-plan-icon {
    color: #5d78ff; }

.pricing-plan-features {
  list-style: none;
  padding-left: 0;
  font-size: 14px;
  line-height: 2.14;
  margin-bottom: 35px;
  color: #303132; }

.pricing-plan-purchase-btn {
  color: #000;
  font-size: 16px;
  font-weight: bold;
  width: 145px;
  height: 45px;
  border-radius: 22.5px;
  -webkit-transition: all 0.4s;
  transition: all 0.4s;
  position: relative;
  display: -webkit-box;
  display: flex;
  -webkit-box-align: center;
          align-items: center;
  margin-left: auto;
  margin-right: auto;
  -webkit-box-pack: center;
          justify-content: center; }
  .pricing-plan-basic .pricing-plan-purchase-btn {
    background-color: #fe397a;
    color: #fff; 
  }
    .pricing-plan-basic .pricing-plan-purchase-btn:hover {
      box-shadow: 0 3px 0 0 #b7013d; }
    .pricing-plan-basic .pricing-plan-purchase-btn:active {
      -webkit-transform: translateY(3px);
              transform: translateY(3px);
      box-shadow: none; }
  .pricing-plan-pro .pricing-plan-purchase-btn {
    background-color: #10bb87;
    color: #fff; }
    .pricing-plan-pro .pricing-plan-purchase-btn:hover {
      box-shadow: 0 3px 0 0 #0a7554; }
    .pricing-plan-pro .pricing-plan-purchase-btn:active {
      -webkit-transform: translateY(3px);
              transform: translateY(3px);
      box-shadow: none; }
  .pricing-plan-enterprise .pricing-plan-purchase-btn {
    background-color: #5d78ff;
    color: #fff; }
    .pricing-plan-enterprise .pricing-plan-purchase-btn:hover {
      box-shadow: 0 3px 0 0 #1138ff; }
    .pricing-plan-enterprise .pricing-plan-purchase-btn:active {
      -webkit-transform: translateY(3px);
              transform: translateY(3px);
      box-shadow: none; }

/*# sourceMappingURL=pricing-plan.css.map */

.wrapper {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 10px;
  grid-auto-rows: minmax(100px, auto);
}
.one {
  grid-column: 1 / 3;
  grid-row: 1;
}
.two {
  grid-column: 2 / 4;
  grid-row: 1 / 3;
}
.three {
  grid-column: 1;
  grid-row: 2 / 5;
}


</style>

  <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Planes</h1>

  <header class="px-6 py-4 space-y-2 text-center">


  <!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
  <main>
    <div class="container">
      <div class="wrapper row">
        <div class="uno col-md-4">
          <div class="card pricing-card pricing-plan-basic">
            <div class="card-body">
              <i class="mdi mdi-cube-outline pricing-plan-icon"></i>
              <p class="pricing-plan-title">Basic</p>
              <h3 class="pricing-plan-cost ml-auto">FREE</h3>
              <ul class="pricing-plan-features">
                <li class="dark:text-white">Unlimited conferences</li>
                <li class="dark:text-white">100 participants max</li>
                <li class="dark:text-white">Custom Hold Music</li>
                <li class="dark:text-white">10 participants max</li>
              </ul>
              <a href="#!" class="btn pricing-plan-purchase-btn">Free</a>
            </div>
          </div>
        </div>
        <div class="dos col-md-4">
          <div class="card pricing-card pricing-card-highlighted  pricing-plan-pro">
            <div class="card-body">
                <i class="mdi mdi-trophy pricing-plan-icon"></i>
              <p class="pricing-plan-title">Anual</p>
              <h3 class="pricing-plan-cost ml-auto">S/50</h3>
              <ul class="pricing-plan-features">
                <li class="dark:text-white">Unlimited conferences</li>
                <li class="dark:text-white">100 participants max</li>
                <li class="dark:text-white">Custom Hold Music</li>
                <li class="dark:text-white">10 participants max</li>
              </ul>
              <a href="#!" class="btn pricing-plan-purchase-btn">Purchase</a>
            </div>
          </div>
        </div>
        <div class="tres col-md-4">
          <div class="card pricing-card pricing-plan-enterprise">
            <div class="card-body">
              <i class="mdi mdi-wallet-giftcard pricing-plan-icon"></i>
              <p class="pricing-plan-title .dark:text-white">Mensual</p>
              <h3 class="pricing-plan-cost ml-auto">S/5</h3>
              <ul class="pricing-plan-features">
                <li class="dark:text-white">Unlimited conferences</li>
                <li class="dark:text-white">100 participants max</li>
                <li class="dark:text-white">Custom Hold Music</li>
                <li class="dark:text-white">10 participants max</li>
              </ul>
              <a href="#!" class="btn pricing-plan-purchase-btn">Purchase</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  
</body>
</html>



    <a class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-900 focus:outline-none focus:border-sky-900 focus:shadow-outline-sky" href="{{ route('plan.subscribe') }}">nueva suscripcion</a>
    
  </header>
</x-layouts.app>