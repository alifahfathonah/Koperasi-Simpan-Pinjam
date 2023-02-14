    <template id="t_angsurEdit">
        <section class="page-component">
            <div v-if="showheader" class="bg-light p-3 mb-3">
                <div class="container">
                    <div class="row ">
                        <div  class="col-12 comp-grid" :class="setGridSize">
                            <h3 class="record-title">Edit  T Angsur</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div  class="pb-2 mb-3 border-bottom">
                <div class="container">
                    <div class="row ">
                        <div  class="col-md-7 comp-grid" :class="setGridSize">
                            <div  class=" animated fadeIn">
                                <form  v-show="!loading" enctype="multipart/form-data" @submit="update()" class="form form-default" :action="'t_angsur/edit/' + data.id" method="post">
                                    <div class="form-group " :class="{'has-error' : errors.has('kode_pinjam')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="kode_pinjam">Kode Pinjam <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.kode_pinjam"
                                                    v-validate="{required:true,  numeric:true}"
                                                    data-vv-as="Kode Pinjam"
                                                    class="form-control "
                                                    type="number"
                                                    name="kode_pinjam"
                                                    placeholder="Enter Kode Pinjam"
                                                    step="1" 
                                                    />
                                                    <small v-show="errors.has('kode_pinjam')" class="form-text text-danger">
                                                        {{ errors.first('kode_pinjam') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('angsuran_ke')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="angsuran_ke">Angsuran Ke <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.angsuran_ke"
                                                    v-validate="{required:true,  numeric:true}"
                                                    data-vv-as="Angsuran Ke"
                                                    class="form-control "
                                                    type="number"
                                                    name="angsuran_ke"
                                                    placeholder="Enter Angsuran Ke"
                                                    step="1" 
                                                    />
                                                    <small v-show="errors.has('angsuran_ke')" class="form-text text-danger">
                                                        {{ errors.first('angsuran_ke') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('besar_angsuran')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="besar_angsuran">Besar Angsuran <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.besar_angsuran"
                                                    v-validate="{required:true,  numeric:true}"
                                                    data-vv-as="Besar Angsuran"
                                                    class="form-control "
                                                    type="number"
                                                    name="besar_angsuran"
                                                    placeholder="Enter Besar Angsuran"
                                                    step="1" 
                                                    />
                                                    <small v-show="errors.has('besar_angsuran')" class="form-text text-danger">
                                                        {{ errors.first('besar_angsuran') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('denda')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="denda">Denda <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.denda"
                                                    v-validate="{required:true,  numeric:true}"
                                                    data-vv-as="Denda"
                                                    class="form-control "
                                                    type="number"
                                                    name="denda"
                                                    placeholder="Enter Denda"
                                                    step="1" 
                                                    />
                                                    <small v-show="errors.has('denda')" class="form-text text-danger">
                                                        {{ errors.first('denda') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('sisa_pinjam')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="sisa_pinjam">Sisa Pinjam <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.sisa_pinjam"
                                                    v-validate="{required:true,  numeric:true}"
                                                    data-vv-as="Sisa Pinjam"
                                                    class="form-control "
                                                    type="number"
                                                    name="sisa_pinjam"
                                                    placeholder="Enter Sisa Pinjam"
                                                    step="1" 
                                                    />
                                                    <small v-show="errors.has('sisa_pinjam')" class="form-text text-danger">
                                                        {{ errors.first('sisa_pinjam') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                                        <button @click="update()" :disabled="errors.any()" class="btn btn-primary" type="button">
                                            <i class="load-indicator"><clip-loader :loading="saving" color="#fff" size="14px"></clip-loader> </i>
                                            {{submitbuttontext}}
                                            <i class="fa fa-send"></i>
                                        </button>
                                    </div>
                                </form>
                                <div v-show="loading" class="load-indicator static-center">
                                    <span class="animator">
                                        <clip-loader :loading="loading" color="gray" size="20px">
                                        </clip-loader>
                                    </span>
                                    <h4 style="color:gray" class="loading-text"></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </template>
    <script>
	var T_AngsurEditComponent = Vue.component('t_angsurEdit', {
		template : '#t_angsurEdit',
		mixins: [EditPageMixin],
		props: {
			pagename : {
				type : String,
				default : 't_angsur',
			},
			routename : {
				type : String,
				default : 't_angsuredit',
			},
			apipath : {
				type : String,
				default : 't_angsur/edit',
			},
		},
		data: function() {
			return {
				data : { kode_pinjam: '',angsuran_ke: '',besar_angsuran: '',denda: '',sisa_pinjam: '',kode_anggota: '',u_entry: '',tgl_entri: '', },
			}
		},
		computed: {
			pageTitle: function(){
				return 'Edit  T Angsur';
			},
		},
		methods: {
			actionAfterUpdate : function(response){
				this.$root.$emit('requestCompleted' , this.msgafterupdate);
				if(!this.ismodal){
					this.$router.push('/t_angsur');
				}
			},
		},
		watch: {
			id: function(newVal, oldVal) {
				if(this.id){
					this.load();
				}
			},
			modelBind: function(){
				var binds = this.modelBind;
				for(key in binds){
					this.data[key]= binds[key];
				}
			},
			pageTitle: function(){
				this.SetPageTitle( this.pageTitle );
			},
		},
		created: function(){
			this.SetPageTitle(this.pageTitle);
		},
		mounted: function() {
			//this.load();
		},
	});
	</script>
