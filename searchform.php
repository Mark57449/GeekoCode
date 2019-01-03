		 <form role="search" method="get" action="<?php echo home_url('/'); ?>">
            <div class="input-group">
              <input 
               type="search" class="form-control"
               value="<?php echo the_search_query(); ?>"
               placeholder="Tec, tec, tec, tec... pesquisando..."
               name="Pesquisa">
              <div class="input-group-apend">
                <button class="btn btn-success" type="submit">Buscar</button>
              </div>
            </div>
          </form>