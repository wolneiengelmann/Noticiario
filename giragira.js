function criarCarrossel() {
    const carrosselHtml = `
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
          
            <img src="https://png.pngtree.com/thumb_back/fw800/background/20220523/pngtree-header-or-footer-banner-template-with-copy-space-image_1373620.jpg" style=""  class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://png.pngtree.com/thumb_back/fw800/background/20220523/pngtree-header-or-footer-banner-template-with-copy-space-image_1373620.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="http://3.bp.blogspot.com/-UXP8zFeqxp0/U-E59OiluPI/AAAAAAAAXG8/47uuMeyLUiY/s1600/BRA_DSM-1.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
      </div>
    `;
    document.querySelector('#meu-container').innerHTML = carrosselHtml;
  
    var myCarousel = document.querySelector('#carouselExampleIndicators')
    var carousel = new bootstrap.Carousel(myCarousel, {
      interval: 10,
      wrap: true,
      keyboard: true
    });
  }
  