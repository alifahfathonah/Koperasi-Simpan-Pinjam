    <template id="t_jenis_pinjamAdd">
        <section class="page-component">
            <div v-if="showheader" class="bg-light p-3 mb-3">
                <div class="container">
                    <div class="row ">
                        <div  class="col-12 comp-grid" :class="setGridSize">
                            <h3 class="record-title">Add New T Jenis Pinjam</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div  class="pb-2 mb-3 border-bottom">
                <div class="container">
                    <div class="row ">
                        <div  class="col-md-7 comp-grid" :class="setGridSize">
                            <div  class=" animated fadeIn">
                                <form enctype="multipart/form-data" @submit="save" class="form form-default" action="t_jenis_pinjam/add" method="post">
                                    <div class="form-group " :class="{'has-error' : errors.has('kode_jenis_pinjam')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="kode_jenis_pinjam">Kode Jenis Pinjam <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.kode_jenis_pinjam"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Kode Jenis Pinjam"
                                                    class="form-control "
                                                    type="text"
                                                    name="kode_jenis_pinjam"
                                                    placeholder="Enter Kode Jenis Pinjam"
                                                    />
                                                    <small v-show="errors.has('kode_jenis_pinjam')" class="form-text text-danger">
                                                        {{ errors.first('kode_jenis_pinjam') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('nama_pinjaman')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="nama_pinjaman">Nama Pinjaman <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.nama_pinjaman"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Nama Pinjaman"
                                                    class="form-control "
                                                    type="text"
                                                    name="nama_pinjaman"
                                                    placeholder="Enter Nama Pinjaman"
                                                    />
                                                    <small v-show="errors.has('nama_pinjaman')" class="form-text text-danger">
                                                        {{ errors.first('nama_pinjaman') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('lama_angsuran')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="lama_angsuran">Lama Angsuran <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.lama_angsuran"
                                                    v-validate="{required:true,  numeric:true}"
                                                    data-vv-as="Lama Angsuran"
                                                    class="form-control "
                                                    type="number"
                                                    name="lama_angsuran"
                                                    placeholder="Enter Lama Angsuran"
                                                    step="1" 
                                                    />
                                                    <small v-show="errors.has('lama_angsuran')" class="form-text text-danger">
                                                        {{ errors.first('lama_angsuran') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('maks_pinjam')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="maks_pinjam">Maks Pinjam <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.maks_pinjam"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Maks Pinjam"
                                                    class="form-control "
                                                    type="text"
                                                    name="maks_pinjam"
                                                    placeholder="Enter Maks Pinjam"
                                                    />
                                                    <small v-show="errors.has('maks_pinjam')" class="form-text text-danger">
                                                        {{ errors.first('maks_pinjam') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('bunga')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="bunga">Bunga <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.bunga"
                                                    v-validate="{required:true,  numeric:true}"
                                                    data-vv-as="Bunga"
                                                    class="form-control "
                                                    type="number"
                                                    name="bunga"
                                                    placeholder="Enter Bunga"
                                                    step="1" 
                                                    />
                                                    <small v-show="errors.has('bunga')" class="form-text text-danger">
                                                        {{ errors.first('bunga') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('u_entry')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="u_entry">U Entry <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.u_entry"
                                                    v-validate="{required:true}"
                                                    data-vv-as="U Entry"
                                                    class="form-control "
                                                    type="text"
                                                    name="u_entry"
                                                    placeholder="Enter U Entry"
                                                    />
                                                    <small v-show="errors.has('u_entry')" class="form-text text-danger">
                                                        {{ errors.first('u_entry') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('tgl_entri')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="tgl_entri">Tgl Entri <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <flat-pickr
                                                    v-model="data.tgl_entri"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Tgl Entri"
                                                    name="tgl_entri"
                                                    placeholder="Enter Tgl Entri"
                                                    :config="{
                                                    dateFormat: 'Y-m-d',
                                                    altFormat: 'F j, Y',
                                                    altInput: true, 
                                                    allowInput:true
                                                    }"
                                                    >
                                                    </flat-pickr>
                                                    <small v-show="errors.has('tgl_entri')" class="form-text text-danger">{{ errors.first('tgl_entri') }}</small>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <button class="btn btn-primary"  :disabled="errors.any()" type="submit">
                                            <i class="load-indicator">
                                                <clip-loader :loading="saving" color="#fff" size="15px"></clip-loader>
                                            </i>
                                            {{submitbuttontext}}
                                            <i class="fa fa-send"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </template>
    <script>
	var T_Jenis_PinjamAddComponent = Vue.component('t_jenis_pinjamAdd', {
		template : '#t_jenis_pinjamAdd',
		mixins: [AddPageMixin],
		props:{
			pagename : {
				type : String,
				default : 't_jenis_pinjam',
			},
			routename : {
				type : String,
				default : 't_jenis_pinjamadd',
			},
			apipath : {
				type : String,
				default : 't_jenis_pinjam/add',
			},
		},
		data : function() {
			return {
				id : {
					type : String,
					default : '',
				},
				data : {
					kode_jenis_pinjam: '',nama_pinjaman: '',lama_angsuran: '',maks_pinjam: '',bunga: '',u_entry: '',tgl_entri: '',
				},
			}
		},
		computed: {
			pageTitle: function(){
				return 'Add New T Jenis Pinjam';
			},
		},
		methods: {
			actionAfterSave : function(response){
				this.$root.$emit('requestCompleted' , this.msgaftersave);
				this.$router.push('/t_jenis_pinjam');
			},
			resetForm : function(){
				this.data = {kode_jenis_pinjam: '',nama_pinjaman: '',lama_angsuran: '',maks_pinjam: '',bunga: '',u_entry: '',tgl_entri: '',};
				this.$validator.reset();
			},
		},
		mounted : function() {
		},
	});
	</script>
