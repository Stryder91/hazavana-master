<form id="add_resa" action="./admin/add_resa_lodge.php" method="post" class="white-popup-block mfp-hide">
	<div class="popup_box">
		<div class="popup_inner">
			<h3>Demande de réservation</h3>
			<p class="primColor"> Une remise de 5% est accordée aux clients ayant effectué une réservation de plus de 5 nuitées. </p>
				<div class="row">		
					<div class="col-xl-12">
						<input class="form-group form-control" type="text" placeholder="Nom" name="nom" />
					</div>
					<div class="col-xl-12">
						<input class="form-group form-control" type="text" placeholder="Prénom" name="prenom" />
					</div>
					<div class="col-xl-12">
						<input class="form-group form-control" type="text" placeholder="Email" name="email" />
					</div>
					<div class="col-xl-12">
						<input class="form-group form-control" type="text" placeholder="Téléphone" name="telephone" />
					</div>
					<div class="col-xl-6">
						<input id="datepicker" placeholder="Date arrivée" name="entree">
					</div>
					<div class="col-xl-6">
						<input id="datepicker2" placeholder="Date départ" name="sortie">
					</div>
					<div class="col-xl-6">
						<select class="form-select wide" id="default-select" name="adultes_nb">
							<option data-display="Adultes">1</option>
							<option value="1">2</option>
							<option value="2">3</option>
							<option value="3">4</option>
						</select>
					</div>
					<div class="col-xl-6">
						<select class="form-select wide" id="default-select" name="enfants_nb">
							<option data-display="Enfants">1</option>
							<option value="1">2</option>
							<option value="2">3</option>
							<option value="3">4</option>
						</select>
					</div>
					<div class="col-xl-12">
						<select class="form-select wide" id="default-select" name="nb_chambre">
							<option data-display="Nombre de Bungalow">Nombre de Bungalow</option>
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
					</div>
					<div class="col-xl-12">
						<select class="form-select wide" id="default-select" name="nb_bungalow">
							<option data-display="Nombre de Chambre">Nombre de chambre</option>
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
						</select>
					</div>
					<div class="col-xl-12">
							<button type="submit" class="boxed-btn3">Demande de Reservation</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</form>