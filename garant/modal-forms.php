<!-- Модальное окно -->

<!-- Вход регистрация -->
<div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-body">
				<div class="row">
          <div class="col-6">
          	<form class="form enter-form" action="#" method="POST">
							<label class="label enter-label" for="#">Логин</label>
	           	<input class="form-input enter-input" type="text">
							<label class="label enter-label" for="#">Пароль</label>	           	
	           	<input class="form-input enter-input" type="text">
	           	<input class="form-btn enter-btn" type="submit" value="Войти">
	           	<a class="form-btn enter-btn" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">Зарегистрироваться</a>
	          </form>
	        </div>
	        <div class="col-6">
	        	<div class="enter-description">
	        		<h3 class="enter__title title">Войдите в личный кабинет!</h3>
	        		<p class="enter__sub-title sub-title">Получите возможность забронировать недвижимость!</p>	
	        	</div>
	        </div>
        </div> 

	      </div>
    </div>
  </div>
</div>

<!-- Регистрация вход -->
<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-body">
	
 				<div class="row">
 	        <div class="col-6">
 	        	<div class="enter-description enter-description_reg">
 	        		<h3 class="enter__title enter__title_reg title">Зарегистрируйте личный кабинет!</h3>
 	        		<p class="enter__sub-title enter__sub-title_reg  sub-title">Получите возможность забронировать недвижимость!</p>
 	        	</div>
 	        </div>
	         <div class="col-6">
	         	<form class="form enter-form" action="#" method="POST">
							<label class="label enter-label" for="#">Имя</label>
	           	<input class="form-input reg-input" type="text">
	           	<label class="label enter-label" for="#">Логин</label>
	           	<input class="form-input reg-input" type="text">
							<label class="label enter-label" for="#">Пароль</label>          	
							<input class="form-input reg-input" type="text">
							<label class="label enter-label" for="#">Введите эл. почту</label>
	           	<input class="form-input reg-input" type="text">
	           	<a class="form-btn enter-btn" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">Войти</a>
	           	<input class="form-btn enter-btn" type="submit" value="Зарегистрироваться">
	          </form>
	        </div>
       </div>              
      </div>
    </div>
  </div>
</div>
