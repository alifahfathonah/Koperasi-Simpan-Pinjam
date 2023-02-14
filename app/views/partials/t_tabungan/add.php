    <template id="t_tabunganAdd">
        <section class="page-component">
            <div v-if="showheader" class="bg-light p-3 mb-3">
                <div class="container">
                    <div class="row ">
                        <div  class="col-12 comp-grid" :class="setGridSize">
                            <h3 class="record-title">Add New T Tabungan</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div  class="pb-2 mb-3 border-bottom">
                <div class="container">
                    <div class="row ">
                        <div  class="col-md-7 comp-grid" :class="setGridSize">
                            <div  class=" animated fadeIn">
                                <form enctype="multipart/form-data" @submit="save" class="form form-default" action="t_tabungan/add" method="post">
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
                                    <div class="form-group " :class="{'has-error' : errors.has('tgl_mulai')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="tgl_mulai">Tgl Mulai <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <flat-pickr
                                                    v-model="data.tgl_mulai"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Tgl Mulai"
                                                    name="tgl_mulai"
                                                    placeholder="Enter Tgl Mulai"
                                                    :config="{
                                                    dateFormat: 'Y-m-d',
                                                    altFormat: 'F j, Y',
                                                    altInput: true, 
                                                    allowInput:true
                                                    }"
                                                    >
                                                    </flat-pickr>
                                                    <small v-show="errors.has('tgl_mulai')" class="form-text text-danger">{{ errors.first('tgl_mulai') }}</small>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('besar_tabungan')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="besar_tabungan">Besar Tabungan <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.besar_tabungan"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Besar Tabungan"
                                                    class="form-control "
                                                    type="text"
                                                    name="besar_tabungan"
                                                    placeholder="Enter Besar Tabungan"
                                                    />
                                                    <small v-show="errors.has('besar_tabungan')" class="form-text text-danger">
                                                        {{ errors.first('besar_tabungan') }}
                                                    </small>
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
	var T_TabunganAddComponent = Vue.component('t_tabunganAdd', {
		template : '#t_tabunganAdd',
		mixins: [AddPageMixin],
		props:{
			pagename : {
				type : String,
				default : 't_tabungan',
			},
			routename : {
				type : String,
				default : 't_tabunganadd',
			},
			apipath : {
				type : String,
				default : 't_tabungan/add',
			},
		},
		data : function() {
			return {
				id : {
					type : String,
					default : '',
				},
				data : {
					kode_anggota: '',tgl_mulai: '',besar_tabungan: '',
				},
			}
		},
		computed: {
			pageTitle: function(){
				return 'Add New T Tabungan';
			},
		},
		methods: {
			actionAfterSave : function(response){
				this.$root.$emit('requestCompleted' , this.msgaftersave);
				this.$router.push('/t_tabungan');
			},
			resetForm : function(){
				this.data = {kode_anggota: '',tgl_mulai: '',besar_tabungan: '',};
				this.$validator.reset();
			},
		},
		mounted : function() {
		},
	});
	</script>
