@extends('layouts.main_layout')

@section('title', 'ЦК Електронних апаратів  - Студенту')

@section('content')

@if (session('success'))
    <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        <h4><i class="icon fa fa-check"> </i>{{ session('success') }}</h4>
    </div>
@endif

<div class="">
	<form name="" action="{{ url('/feedbackstore') }}" method="post">
		@csrf
		<div class="" >Анкета вступника</div>
		<div class="" >Заповніть анкету та отримайте персональну консультацію від завідуючого кафедрою</div>

		<div class="">
			<div class="">Контактна інформація</div>
			<div class="">Ми  зв`яжемось з Вами зручним для Вас способом:</div>
			
			<div class="">
				<input id="phone" type="text" name="phone" class=" " placeholder="Телефон" required=""> 
			</div>	

			<div class="">
				<input id="email" type="text" name="email" class="" placeholder="E-mail"> 
			</div>						

			<div class="">Освіта</div>
			<div class="">Вкажіть де Ви навчались\навчаєтесь</div>

			<div class="">
				<input id="school" type="text" name="school" class="" placeholder="Назва навчального закладу"> 
			</div>	

			<div class="">
				<select name="">
					<option value="0" selected="selected">(test) Рік закінчення навчання</option>
					<option value="2017">2016</option>
					<option value="2017">2017</option>
					<option value="2018">2018</option>
					<option value="2019">2019</option>
					<option value="2020">2020</option>
					<option value="2021">2021</option>
					<option value="2022">2022</option>
					<option value="2023">2023</option>
					<option value="2024">2024</option>
					<option value="2025">2025</option>
					<option value="2025">2026</option>
					<option value="2025">2027</option>
					<option value="2025">2028</option>
					<option value="2025">2029</option>
					<option value="2025">2030</option>
				</select> 
			</div>
		</div>

		<div class="">
			<div class="">Розкажіть про себе</div>
			<div class="">Давайте знайомитись</div>	

			<div class="">
				<input id="pip" required="" type="text" name="pip" class="" placeholder="ПІП"> <br>
			</div>	
			
			<div class="">
				<input id="option" type="text" name="option" class="" placeholder="Звідки Ви дізнались про університет (необов`язково)"> 
			</div>

			<div class="">	
				<input type="submit" class="" name="" style="" value="Отримати консультацію">
			</div>	
		</div>
	</form>
</div>
@endsection