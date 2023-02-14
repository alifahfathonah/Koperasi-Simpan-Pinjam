    <template id="t_pinjamEdit">
        <section class="page-component">
            <div v-if="showheader" class="bg-light p-3 mb-3">
                <div class="container">
                    <div class="row ">
                        <div  class="col-12 comp-grid" :class="setGridSize">
                            <h3 class="record-title">Edit  T Pinjam</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div  class="pb-2 mb-3 border-bottom">
                <div class="container">
                    <div class="row ">
                        <div  class="col-md-7 comp-grid" :class="setGridSize">
                            <div  class=" animated fadeIn">
                                <form  v-show="!loading" enctype="multipart/form-data" @submit="update()" class="form form-default" :action="'t_pinjam/edit/' + data.id" method="post">
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
                                    <div class="form-group " :class="{'has-error' : errors.has('besar_pinjam')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="besar_pinjam">Besar Pinjam <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.besar_pinjam"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Besar Pinjam"
                                                    class="form-control "
                                                    type="text"
                                                    name="besar_pinjam"
                                                    placeholder="Enter Besar Pinjam"
                                                    />
                                                    <small v-show="errors.has('besar_pinjam')" class="form-text text-danger">
                                                        {{ errors.first('besar_pinjam') }}
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
                                                    v-validate="{required:true}"
                                                    data-vv-as="Besar Angsuran"
                                                    class="form-control "
                                                    type="text"
                                                    name="besar_angsuran"
                                                    placeholder="Enter Besar Angsuran"
                                                    />
                                                    <small v-show="errors.has('besar_angsuran')" class="form-text text-danger">
                                                        {{ errors.first('besar_angsuran') }}
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
                                    <div class="form-group " :class="{'has-error' : errors.has('sisa_angsuran')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="sisa_angsuran">Sisa Angsuran <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.sisa_angsuran"
                                                    v-validate="{required:true,  numeric:true}"
                                                    data-vv-as="Sisa Angsuran"
                                                    class="form-control "
                                                    type="number"
                                                    name="sisa_angsuran"
                                                    placeholder="Enter Sisa Angsuran"
                                                    step="1" 
                                                    />
                                                    <small v-show="errors.has('sisa_angsuran')" class="form-text text-danger">
                                                        {{ errors.first('sisa_angsuran') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('sisa_pinjaman')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="sisa_pinjaman">Sisa Pinjaman <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.sisa_pinjaman"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Sisa Pinjaman"
                                                    class="form-control "
                                                    type="text"
                                                    name="sisa_pinjaman"
                                                    placeholder="Enter Sisa Pinjaman"
                                                    />
                                                    <small v-show="errors.has('sisa_pinjaman')" class="form-text text-danger">
                                                        {{ errors.first('sisa_pinjaman') }}
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
                                    <div class="form-group " :class="{'has-error' : errors.has('tgl_tempo')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="tgl_tempo">Tgl Tempo <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <flat-pickr
                                                    v-model="data.tgl_tempo"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Tgl Tempo"
                                                    name="tgl_tempo"
                                                    placeholder="Enter Tgl Tempo"
                                                    :config="{
                                                    dateFormat: 'Y-m-d',
                                                    altFormat: 'F j, Y',
                                                    altInput: true, 
                                                    allowInput:true
                                                    }"
                                                    >
                                                    </flat-pickr>
                                                    <small v-show="errors.has('tgl_tempo')" class="form-text text-danger">{{ errors.first('tgl_tempo') }}</small>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('status')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="status">Status <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.status"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Status"
                                                    class="form-control "
                                                    type="text"
                                                    name="status"
                                                    placeholder="Enter Status"
                                                    />
                                                    <small v-show="errors.has('status')" class="form-text text-danger">
                                                        {{ errors.first('status') }}
                                                    </small>
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
	var T_PinjamEditComponent = Vue.component('t_pinjamEdit', {
		template : '#t_pinjamEdit',
		mixins: [EditPageMixin],
		props: {
			pagename : {
				type : String,
				default : 't_pinjam',
			},
			routename : {
				type : String,
				default : 't_pinjamedit',
			},
			apipath : {
				type : String,
				default : 't_pinjam/edit',
			},
		},
		data: function() {
			return {
				data : { kode_anggota: '',kode_jenis_pinjam: '',besar_pinjam: '',besar_angsuran: '',lama_angsuran: '',sisa_angsuran: '',sisa_pinjaman: '',u_entry: '',tgl_entri: '',tgl_tempo: '',status: '', },
			}
		},
		computed: {
			pageTitle: function(){
				return 'Edit  T Pinjam';
			},
		},
		methods: {
			actionAfterUpdate : function(response){
				this.$root.$emit('requestCompleted' , this.msgafterupdate);
				if(!this.ismodal){
					this.$router.push('/t_pinjam');
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
