    <template id="t_userView">
        <section class="page-component">
            <div v-if="showheader" class="bg-light p-3 mb-3">
                <div class="container">
                    <div class="row ">
                        <div  class="col-12 comp-grid" :class="setGridSize">
                            <h3 class="record-title">View  T User</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div  class="pb-2 mb-3 border-bottom">
                <div class="container">
                    <div class="row ">
                        <div  class="col-md-12 comp-grid" :class="setGridSize">
                            <div  class=" animated fadeIn">
                                <div v-show="!loading">
                                    <div ref="datatable" id="datatable">
                                        <table class="table table-hover table-borderless table-striped">
                                            <!-- Table Body Start -->
                                            <tbody>
                                                <tr>
                                                    <th class="title"> Kode User :</th>
                                                    <td class="value"> {{ data.kode_user }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Kode Petugas :</th>
                                                    <td class="value"> {{ data.kode_petugas }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Username :</th>
                                                    <td class="value"> {{ data.username }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Password :</th>
                                                    <td class="value"> {{ data.password }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Nama :</th>
                                                    <td class="value"> {{ data.nama }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Tgl Entri :</th>
                                                    <td class="value"> {{ data.tgl_entri }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Foto :</th>
                                                    <td class="value"> {{ data.foto }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Level :</th>
                                                    <td class="value"> {{ data.level }} </td>
                                                </tr>
                                            </tbody>
                                            <!-- Table Body End -->
                                        </table>
                                    </div>
                                    <div v-if="editbutton || deletebutton || exportbutton" class="py-3">
                                        <span >
                                            <router-link class="btn btn-sm btn-info has-tooltip" v-if="editbutton"  :to="'/t_user/edit/'  + data.kode_user">
                                            <i class="fa fa-edit"></i> 
                                            </router-link>
                                            <button @click="deleteRecord" class="btn btn-sm btn-danger" v-if="deletebutton" :to="'/t_user/delete/' + data.kode_user">
                                            <i class="fa fa-times"></i> </button>
                                        </span>
                                        <button @click="exportRecord" class="btn btn-sm btn-primary" v-if="exportbutton">
                                            <i class="fa fa-save"></i> 
                                        </button>
                                    </div>
                                </div>
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
	var T_UserViewComponent = Vue.component('t_userView', {
		template : '#t_userView',
		mixins: [ViewPageMixin],
		props: {
			pagename: {
				type : String,
				default : 't_user',
			},
			routename : {
				type : String,
				default : 't_userview',
			},
			apipath: {
				type : String,
				default : 't_user/view',
			},
		},
		data: function() {
			return {
				data : {
					default :{
						kode_user: '',kode_petugas: '',username: '',password: '',nama: '',tgl_entri: '',foto: '',level: '',
					},
				},
			}
		},
		computed: {
			pageTitle: function(){
				return 'View  T User';
			},
		},
		methods :{
			resetData : function(){
				this.data = {
					kode_user: '',kode_petugas: '',username: '',password: '',nama: '',tgl_entri: '',foto: '',level: '',
				}
			},
		},
	});
	</script>
