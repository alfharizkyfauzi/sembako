   
<div class="wrapper pull-left m">
    
    	<div class="page-title">
        	<h1>Edit Kategori</h1>
            <p>Perbarui nama kategori</p>
        </div>
    
    	<form action="<?= SITE ?>/admin/edit_kategori" method="post" class="form">
        	<label class="block">
            	<b>Nama Kategori</b>
                <input type="text" name="kategori" class="form-control" value="<?= $data[0]['kategori'] ?>" required="required" style="width:300px;" />
            </label>
            <input type="hidden" name="id_kategori" value="<?= $data[0]['id_kategori'] ?>" />
	        <button type="submit" name="submit" class="btn btn-large pull-left">Submit</button>
        </form>
    </div>
    
    <div style="height:30px; width:100%" class="pull-left"></div>
    
</div>