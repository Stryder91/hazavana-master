<form id="add_resa" action="./admin/add_resa.php" method="post" class="white-popup-block mfp-hide">
	<div class="popup_box ">
		<div class="popup_inner">
			<h3>Demande de réservation</h3>
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
					<!-- <div class="col-xl-6">
						<input id="datepicker" placeholder="Check in date" name="entree">
					</div>
					<div class="col-xl-6">
						<input id="datepicker2" placeholder="Check out date" name="sortie">
					</div> -->
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
						<select class="form-select wide" id="default-select" name="type_chambre">
							<option data-display="Room type">Type de chambre</option>
							<option value="bungalow">Bungalow</option>
							<option value="chambre">Chambre confort</option>
						</select>
					</div>
					<div class="col-xl-12">
							<button type="submit" class="boxed-btn3">Check Availability</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</form>