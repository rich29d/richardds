<section class="sec-works">

  <div class="sec-tit">works</div>

  <div class="cont-itens font-gothic">

    <?php $arr_tipo = ['web', 'logo', 'impresso']; ?>

    @for($i=1; $i<=6; $i++ )
      <?php $rand_color = $arr_tipo[rand(0,2)]; ?>
    <div class="item">

      <div class="item-work it-{{ $i }} relative tabela">
        <div class="linha">
          <div class="item-img acessa-link" data-link="" data-item-num="{{ $i }}" style="background-image: url({{url('img/works/jpg_' . $i . '.jpg')}})">

              <div class="item-tipo item-tipo-{{ $rand_color }} relative">
                <span>{{ $rand_color }}</span>
                <div class="cont-seta absolute">
                  <div class="seta"></div>
                </div>
              </div>

          </div>
        </div>

        <div class="linha">

          <div class="item-pnl tabela">
            <div class="celula item-pnl-count-views">
              <span><i class="font-icon">&#xe802;</i></span>
              <span>5465</span>
            </div>
            <div class="celula item-pnl-count-likes">
              <span><i class="font-icon">&#xe801;</i></span>
              <span>4565</span>
            </div>
            <div class="celula item-pnl-link acessa-link" data-link="">
              <span><i class="font-icon">&#xe804;</i></span>
              <span>view</span>
            </div>
          </div>

        </div>

        <div class="item-desc linha absolute zIndex4">

          <div class="item-desc-cont absolute">
            <div class="item-desc-tit">Titulo</div>
            <div class="item-desc-txt">Breve descrição do serviço realizado</div>
            <div class="item-desc-lnk acessa-link" data-link="" >site.com.br</div>
          </div>

        </div>

      </div>

    </div>

    @endfor

  </div>

</section>
