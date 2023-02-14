    <template id="t_petugasView">
        <section class="page-component">
            <div v-if="showheader" class="bg-light p-3 mb-3">
                <div class="container">
                    <div class="row ">
                        <div  class="col-12 comp-grid" :class="setGridSize">
                            <h3 class="record-title">View  T Petugas</h3>
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
                                                    <th class="title"> Kode Petugas :</th>
                                                    <td class="value"> {{ data.kode_petugas }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Nama Petugas :</th>
                                                    <td class="value"> {{ data.nama_petugas }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Alamat Petugas :</th>
                                                    <td class="value"> {{ data.alamat_petugas }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> No Telp :</th>
                                                    <td class="value"> {{ data.no_telp }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Jenis Kelamin :</th>
                                                    <td class="value"> {{ data.jenis_kelamin }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> U Entry :</th>
                                                    <td class="value"> {{ data.u_entry }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Tgl Entri :</th>
                                                    <td class="value"> {{ data.tgl_entri }} </td>
                                                </tr>
                                            </tbody>
                                            <!-- Table Body End -->
                                        </table>
                                    </div>
                                    <div v-if="editbutton || deletebutton || exportbutton" class="py-3">
                                        <span >
                                            <router-link class="btn btn-sm btn-info has-tooltip" v-if="editbutton"  :to="'/t_petugas/edit/'  + data.kode_petugas">
                                            <i class="fa fa-edit"></i> 
                                            </router-link>
                                            <button @click="deleteRecord" class="btn btn-sm btn-danger" v-if="deletebutton" :to="'/t_petugas/delete/' + data.kode_petugas">
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
	var T_PetugasViewComponent = Vue.component('t_petugasView', {
		template : '#t_petugasView',
		mixins: [ViewPageMixin],
		props: {
			pagename: {
				type : String,
				default : 't_petugas',
			},
			routename : {
				type : String,
				default : 't_petugasview',
			},
			apipath: {
				type : String,
				default : 't_petugas/view',
			},
		},
		data: function() {
			return {
				data : {
					default :{
						kode_petugas: '',nama_petugas: '',alamat_petugas: '',no_telp: '',jenis_kelamin: '',u_entry: '',tgl_entri: '',
					},
				},
			}
		},
		computed: {
			pageTitle: function(){
				return 'View  T Petugas';
			},
		},
		methods :{
			resetData : function(){
				this.data = {
					kode_petugas: '',nama_petugas: '',alamat_petugas: '',no_telp: '',jenis_kelamin: '',u_entry: '',tgl_entri: '',
				}
			},
		},
	});
	</script>
