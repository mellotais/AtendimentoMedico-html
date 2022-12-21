<!-- Add New -->
<div class="modal fade" id="addnewm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Adicionar Nova Pessoa</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="./medico/add.php">

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Nome:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nome" id="username" >
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Sobrenome:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="sobrenome"  id="sobrenome" >
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Email:</label>
					</div>
					<div class="col-sm-10">
						<input type="email" class="form-control" name="email" id="email" >
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" onclick="validar()"  name="add" class="btn btn-success btn-sm"data-toggle="modal"><span class="glyphicon glyphicon-floppy-disk"></span> Salvar</a>
      
			</form>
            </div>
 
        </div>
    </div>
</div>

<script>
const button = document.getElementById('button')

button.addEventListener('click', (event) => {
    event.preventDefault()

    const email = document.getElementById('email')
    const username = document.getElementById('username')
    const sobrenome = document.getElementById('sobrenome')
   

    if (email.value == '') {
        email.classList.add("errorInput")
    } else {
        email.classList.remove("errorInput")
    }

    if (username.value == '') {
        username.classList.add("errorInput")
    } else {
        username.classList.remove("errorInput")
    }

    if (sobrenome.value == '') {
        sobrenome.classList.add("errorInput")
    } else {
        sobrenome.classList.remove("errorInput")
    }


    if (!isNaN(email.value) == true && email.value.length == 5) {
        email.classList.remove("errorInput")
    }

    if (username.value.length <= 3) {
        username.classList.add("errorInput")
    } else {
        username.classList.remove("errorInput")
    }

    if (sobrenome.value.length <= 3) {
        sobrenome.classList.add("errorInput")
    } else {
        sobrenome.classList.remove("errorInput")
    }

})
</script>
<style>
    .errorInput {
    border: 2px solid rgb(207, 53, 53) !important;
}
</style>