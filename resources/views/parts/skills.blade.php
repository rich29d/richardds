<section class="sec-skills">

  <div class="sec-tit">skills</div>

  <div class="cont-itens font-gothic">

  @for($i=1; $i<=4; $i++ )

    <div class="item">

      <div class="skill relative">

        <div class="skill-capa absolute zIndex2">

          <div class="skill-logo-img relative" style="background-image:url({{ url('img/codeigniter-logo.png') }})">

          </div>

          <div class="skill-logo-txt relative tabela">
            <div class="celula">
              CodeIgNiter
            </div>
          </div>

        </div>

        <div class="skill-level absolute zIndex4">

          <div class="levels absolute">
            <div class="tabela">

              <?php
                $levels = ['nebs','noob','tá manjando','zika','das galaxias'];
                $lvl_skill = rand(1,5);
              ?>

              @for($l=1; $l<=5; $l++ )
                <div class="celula">
                  <div
                    class="lvl lvl-{{$l}}{{ $l<=$lvl_skill ? ' active' : '' }} relative"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="{{$levels[$l-1]}}"
                  ></div>
                </div>
              @endfor

            </div>
          </div>

        </div>

      </div>

    </div>

  @endfor

  @for($i=1; $i<=4; $i++ )

    <div class="item">

      <div class="skill relative">

        <div class="skill-capa absolute zIndex4">

          <div class="skill-logo-img relative" style="background-image:url({{ url('img/codeigniter-logo.png') }})">

          </div>

          <div class="skill-logo-txt relative tabela">
            <div class="celula">
              CodeIgNiter
            </div>
          </div>

        </div>

        <div class="skill-level absolute zIndex4">

          <div class="levels absolute">
            <div class="tabela">

              <?php
                $levels = ['nebs','noob','tá manjando','zika','das galaxias'];
                $lvl_skill = rand(1,5);
              ?>

              @for($l=1; $l<=5; $l++ )
                <div class="celula">
                  <div
                    class="lvl lvl-{{$l}}{{ $l<=$lvl_skill ? ' active' : '' }} relative"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="{{$levels[$l-1]}}"
                  ></div>
                </div>
              @endfor

            </div>
          </div>

        </div>

      </div>

    </div>

  @endfor

</div>

</section>
