    <template id="t_pengambilanAdd">
        <section class="page-component">
            <div v-if="showheader" class="bg-light p-3 mb-3">
                <div class="container">
                    <div class="row ">
                        <div  class="col-12 comp-grid" :class="setGridSize">
                            <h3 class="record-title">Add New T Pengambilan</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div  class="pb-2 mb-3 border-bottom">
                <div class="container">
                    <div class="row ">
                        <div  class="col-md-7 comp-grid" :class="setGridSize">
                            <div  class=" animated fadeIn">
                                <form enctype="multipart/form-data" @submit="save" class="form form-default" action="t_pengambilan/add" method="post">
                                    <div class="form-group " :class="{'has-error' : errors.has('kode_anggota')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="kode_anggota">Kode Anggota <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.kode_anggota"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Kode Anggota"
                                                    class="form-control "
                                                    type="text"
                                                    name="kode_anggota"
                                                    placeholder="Enter Kode Anggota"
                                                    />
                                                    <small v-show="errors.has('kode_anggota')" class="form-text text-danger">
                                                        {{ errors.first('kode_anggota') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('kode_tabungan')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="kode_tabungan">Kode Tabungan <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.kode_tabungan"
                                                    v-validate="{required:true,  numeric:true}"
                                                    data-vv-as="Kode Tabungan"
                                                    class="form-control "
                                                    type="number"
                                                    name="kode_tabungan"
                                                    placeholder="Enter Kode Tabungan"
                                                    step="1" 
                                                    />
                                                    <small v-show="errors.has('kode_tabungan')" class="form-text text-danger">
                                                        {{ errors.first('kode_tabungan') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('besar_ambil')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="besar_ambil">Besar Ambil <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.besar_ambil"
                                                    v-validate="{required:true,  numeric:true}"
                                                    data-vv-as="Besar Ambil"
                                                    class="form-control "
                                                    type="number"
                                                    name="besar_ambil"
                                                    placeholder="Enter Besar Ambil"
                                                    step="1" 
                                                    />
                                                    <small v-show="errors.has('besar_ambil')" class="form-text text-danger">
                                                        {{ errors.first('besar_ambil') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('tgl_ambil')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="tgl_ambil">Tgl Ambil <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <flat-pickr
                                                    v-model="data.tgl_ambil"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Tgl Ambil"
                                                    name="tgl_ambil"
                                                    placeholder="Enter Tgl Ambil"
                                                    :config="{
                                                    dateFormat: 'Y-m-d',
                                                    altFormat: 'F j, Y',
                                                    altInput: true, 
                                                    allowInput:true
                                                    }"
                                                    >
                                                    </flat-pickr>
                                                    <small v-show="errors.has('tgl_ambil')" class="form-text text-danger">{{ errors.first('tgl_ambil') }}</small>
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
	var T_PengambilanAddComponent = Vue.component('t_pengambilanAdd', {
		template : '#t_pengambilanAdd',
		mixins: [AddPageMixin],
		props:{
			pagename : {
				type : String,
				default : 't_pengambilan',
			},
			routename : {
				type : String,
				default : 't_pengambilanadd',
			},
			apipath : {
				type : String,
				default : 't_pengambilan/add',
			},
		},
		data : function() {
			return {
				id : {
					type : String,
					default : '',
				},
				data : {
					kode_anggota: '',kode_tabungan: '',besar_ambil: '',tgl_ambil: '',
				},
			}
		},
		computed: {
			pageTitle: function(){
				return 'Add New T Pengambilan';
			},
		},
		methods: {
			actionAfterSave : function(response){
				this.$root.$emit('requestCompleted' , this.msgaftersave);
				this.$router.push('/t_pengambilan');
			},
			resetForm : function(){
				this.data = {kode_anggota: '',kode_tabungan: '',besar_ambil: '',tgl_ambil: '',};
				this.$validator.reset();
			},
		},
		mounted : function() {
		},
	});
	</script>
