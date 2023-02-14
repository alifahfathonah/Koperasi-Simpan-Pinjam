    <template id="t_userAdd">
        <section class="page-component">
            <div v-if="showheader" class="bg-light p-3 mb-3">
                <div class="container">
                    <div class="row ">
                        <div  class="col-12 comp-grid" :class="setGridSize">
                            <h3 class="record-title">Add New T User</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div  class="pb-2 mb-3 border-bottom">
                <div class="container">
                    <div class="row ">
                        <div  class="col-md-7 comp-grid" :class="setGridSize">
                            <div  class=" animated fadeIn">
                                <form enctype="multipart/form-data" @submit="save" class="form form-default" action="t_user/add" method="post">
                                    <div class="form-group " :class="{'has-error' : errors.has('kode_user')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="kode_user">Kode User <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.kode_user"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Kode User"
                                                    class="form-control "
                                                    type="text"
                                                    name="kode_user"
                                                    placeholder="Enter Kode User"
                                                    />
                                                    <small v-show="errors.has('kode_user')" class="form-text text-danger">
                                                        {{ errors.first('kode_user') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('kode_petugas')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="kode_petugas">Kode Petugas <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.kode_petugas"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Kode Petugas"
                                                    class="form-control "
                                                    type="text"
                                                    name="kode_petugas"
                                                    placeholder="Enter Kode Petugas"
                                                    />
                                                    <small v-show="errors.has('kode_petugas')" class="form-text text-danger">
                                                        {{ errors.first('kode_petugas') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('username')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="username">Username <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.username"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Username"
                                                    class="form-control "
                                                    type="text"
                                                    name="username"
                                                    placeholder="Enter Username"
                                                    />
                                                    <small v-show="errors.has('username')" class="form-text text-danger">
                                                        {{ errors.first('username') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('password')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="password">Password <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.password"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Password"
                                                    class="form-control "
                                                    type="password"
                                                    name="password"
                                                    placeholder="Enter Password"
                                                    />
                                                    <small v-show="errors.has('password')" class="form-text text-danger">
                                                        {{ errors.first('password') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('confirm_password')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="confirm_password">Confirm Password <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input
                                                    v-model="data.confirm_password"
                                                    v-validate="{ required:true, confirmed:'password' }"
                                                    data-vv-as="Confirm Password"
                                                    class="form-control "
                                                    type="password"
                                                    name="confirm_password"
                                                    placeholder="Confirm Password"
                                                    />
                                                    <small v-show="errors.has('confirm_password')" class="form-text text-danger">{{ errors.first('confirm_password') }}</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('nama')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="nama">Nama <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.nama"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Nama"
                                                    class="form-control "
                                                    type="text"
                                                    name="nama"
                                                    placeholder="Enter Nama"
                                                    />
                                                    <small v-show="errors.has('nama')" class="form-text text-danger">
                                                        {{ errors.first('nama') }}
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
                                    <div class="form-group " :class="{'has-error' : errors.has('foto')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="foto">Foto <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.foto"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Foto"
                                                    class="form-control "
                                                    type="text"
                                                    name="foto"
                                                    placeholder="Enter Foto"
                                                    />
                                                    <small v-show="errors.has('foto')" class="form-text text-danger">
                                                        {{ errors.first('foto') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('level')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="level">Level <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.level"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Level"
                                                    class="form-control "
                                                    type="text"
                                                    name="level"
                                                    placeholder="Enter Level"
                                                    />
                                                    <small v-show="errors.has('level')" class="form-text text-danger">
                                                        {{ errors.first('level') }}
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
	var T_UserAddComponent = Vue.component('t_userAdd', {
		template : '#t_userAdd',
		mixins: [AddPageMixin],
		props:{
			pagename : {
				type : String,
				default : 't_user',
			},
			routename : {
				type : String,
				default : 't_useradd',
			},
			apipath : {
				type : String,
				default : 't_user/add',
			},
		},
		data : function() {
			return {
				id : {
					type : String,
					default : '',
				},
				data : {
					kode_user: '',kode_petugas: '',username: '',password: '',confirm_password: '',nama: '',tgl_entri: '',foto: '',level: '',
				},
			}
		},
		computed: {
			pageTitle: function(){
				return 'Add New T User';
			},
		},
		methods: {
			actionAfterSave : function(response){
				this.$root.$emit('requestCompleted' , this.msgaftersave);
				this.$router.push('/t_user');
			},
			resetForm : function(){
				this.data = {kode_user: '',kode_petugas: '',username: '',password: '',confirm_password: '',nama: '',tgl_entri: '',foto: '',level: '',};
				this.$validator.reset();
			},
		},
		mounted : function() {
		},
	});
	</script>
