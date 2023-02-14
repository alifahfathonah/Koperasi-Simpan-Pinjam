    <template id="t_jenis_simpanView">
        <section class="page-component">
            <div v-if="showheader" class="bg-light p-3 mb-3">
                <div class="container">
                    <div class="row ">
                        <div  class="col-12 comp-grid" :class="setGridSize">
                            <h3 class="record-title">View  T Jenis Simpan</h3>
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
                                                    <th class="title"> Kode Jenis Simpan :</th>
                                                    <td class="value"> {{ data.kode_jenis_simpan }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Nama Simpanan :</th>
                                                    <td class="value"> {{ data.nama_simpanan }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Besar Simpanan :</th>
                                                    <td class="value"> {{ data.besar_simpanan }} </td>
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
                                            <router-link class="btn btn-sm btn-info has-tooltip" v-if="editbutton"  :to="'/t_jenis_simpan/edit/'  + data.kode_jenis_simpan">
                                            <i class="fa fa-edit"></i> 
                                            </router-link>
                                            <button @click="deleteRecord" class="btn btn-sm btn-danger" v-if="deletebutton" :to="'/t_jenis_simpan/delete/' + data.kode_jenis_simpan">
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
	var T_Jenis_SimpanViewComponent = Vue.component('t_jenis_simpanView', {
		template : '#t_jenis_simpanView',
		mixins: [ViewPageMixin],
		props: {
			pagename: {
				type : String,
				default : 't_jenis_simpan',
			},
			routename : {
				type : String,
				default : 't_jenis_simpanview',
			},
			apipath: {
				type : String,
				default : 't_jenis_simpan/view',
			},
		},
		data: function() {
			return {
				data : {
					default :{
						kode_jenis_simpan: '',nama_simpanan: '',besar_simpanan: '',u_entry: '',tgl_entri: '',
					},
				},
			}
		},
		computed: {
			pageTitle: function(){
				return 'View  T Jenis Simpan';
			},
		},
		methods :{
			resetData : function(){
				this.data = {
					kode_jenis_simpan: '',nama_simpanan: '',besar_simpanan: '',u_entry: '',tgl_entri: '',
				}
			},
		},
	});
	</script>
