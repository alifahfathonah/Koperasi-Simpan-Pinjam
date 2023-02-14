    <template id="t_pengajuanAdd">
        <section class="page-component">
            <div v-if="showheader" class="bg-light p-3 mb-3">
                <div class="container">
                    <div class="row ">
                        <div  class="col-12 comp-grid" :class="setGridSize">
                            <h3 class="record-title">Add New T Pengajuan</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div  class="pb-2 mb-3 border-bottom">
                <div class="container">
                    <div class="row ">
                        <div  class="col-md-7 comp-grid" :class="setGridSize">
                            <div  class=" animated fadeIn">
                                <form enctype="multipart/form-data" @submit="save" class="form form-default" action="t_pengajuan/add" method="post">
                                    <div class="form-group " :class="{'has-error' : errors.has('tgl_pengajuan')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="tgl_pengajuan">Tgl Pengajuan <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <flat-pickr
                                                    v-model="data.tgl_pengajuan"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Tgl Pengajuan"
                                                    name="tgl_pengajuan"
                                                    placeholder="Enter Tgl Pengajuan"
                                                    :config="{
                                                    dateFormat: 'Y-m-d',
                                                    altFormat: 'F j, Y',
                                                    altInput: true, 
                                                    allowInput:true
                                                    }"
                                                    >
                                                    </flat-pickr>
                                                    <small v-show="errors.has('tgl_pengajuan')" class="form-text text-danger">{{ errors.first('tgl_pengajuan') }}</small>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                    </div>
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
                                                    v-validate="{required:true,  numeric:true}"
                                                    data-vv-as="Besar Pinjam"
                                                    class="form-control "
                                                    type="number"
                                                    name="besar_pinjam"
                                                    placeholder="Enter Besar Pinjam"
                                                    step="1" 
                                                    />
                                                    <small v-show="errors.has('besar_pinjam')" class="form-text text-danger">
                                                        {{ errors.first('besar_pinjam') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('tgl_acc')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="tgl_acc">Tgl Acc <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <flat-pickr
                                                    v-model="data.tgl_acc"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Tgl Acc"
                                                    name="tgl_acc"
                                                    placeholder="Enter Tgl Acc"
                                                    :config="{
                                                    dateFormat: 'Y-m-d',
                                                    altFormat: 'F j, Y',
                                                    altInput: true, 
                                                    allowInput:true
                                                    }"
                                                    >
                                                    </flat-pickr>
                                                    <small v-show="errors.has('tgl_acc')" class="form-text text-danger">{{ errors.first('tgl_acc') }}</small>
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
	var T_PengajuanAddComponent = Vue.component('t_pengajuanAdd', {
		template : '#t_pengajuanAdd',
		mixins: [AddPageMixin],
		props:{
			pagename : {
				type : String,
				default : 't_pengajuan',
			},
			routename : {
				type : String,
				default : 't_pengajuanadd',
			},
			apipath : {
				type : String,
				default : 't_pengajuan/add',
			},
		},
		data : function() {
			return {
				id : {
					type : String,
					default : '',
				},
				data : {
					tgl_pengajuan: '',kode_anggota: '',kode_jenis_pinjam: '',besar_pinjam: '',tgl_acc: '',status: '',
				},
			}
		},
		computed: {
			pageTitle: function(){
				return 'Add New T Pengajuan';
			},
		},
		methods: {
			actionAfterSave : function(response){
				this.$root.$emit('requestCompleted' , this.msgaftersave);
				this.$router.push('/t_pengajuan');
			},
			resetForm : function(){
				this.data = {tgl_pengajuan: '',kode_anggota: '',kode_jenis_pinjam: '',besar_pinjam: '',tgl_acc: '',status: '',};
				this.$validator.reset();
			},
		},
		mounted : function() {
		},
	});
	</script>
