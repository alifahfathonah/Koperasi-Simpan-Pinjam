    <template id="t_anggotaView">
        <section class="page-component">
            <div v-if="showheader" class="bg-light p-3 mb-3">
                <div class="container">
                    <div class="row ">
                        <div  class="col-12 comp-grid" :class="setGridSize">
                            <h3 class="record-title">View  T Anggota</h3>
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
                                                    <th class="title"> Kode Anggota :</th>
                                                    <td class="value"><router-link :to="'/t_anggota/view/' +  data.kode_anggota">{{data.kode_anggota}}</router-link></td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Kode Tabungan :</th>
                                                    <td class="value"> {{ data.kode_tabungan }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Nama Anggota :</th>
                                                    <td class="value"> {{ data.nama_anggota }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Alamat Anggota :</th>
                                                    <td class="value"> {{ data.alamat_anggota }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Jenis Kelamin :</th>
                                                    <td class="value"> {{ data.jenis_kelamin }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Pekerjaan :</th>
                                                    <td class="value"> {{ data.pekerjaan }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Tgl Masuk :</th>
                                                    <td class="value"> {{ data.tgl_masuk }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Telp :</th>
                                                    <td class="value"> {{ data.telp }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Tempat Lahir :</th>
                                                    <td class="value"> {{ data.tempat_lahir }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Tgl Lahir :</th>
                                                    <td class="value"> {{ data.tgl_lahir }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Status :</th>
                                                    <td class="value"> {{ data.status }} </td>
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
                                            <router-link class="btn btn-sm btn-info has-tooltip" v-if="editbutton"  :to="'/t_anggota/edit/'  + data.kode_anggota">
                                            <i class="fa fa-edit"></i> 
                                            </router-link>
                                            <button @click="deleteRecord" class="btn btn-sm btn-danger" v-if="deletebutton" :to="'/t_anggota/delete/' + data.kode_anggota">
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
	var T_AnggotaViewComponent = Vue.component('t_anggotaView', {
		template : '#t_anggotaView',
		mixins: [ViewPageMixin],
		props: {
			pagename: {
				type : String,
				default : 't_anggota',
			},
			routename : {
				type : String,
				default : 't_anggotaview',
			},
			apipath: {
				type : String,
				default : 't_anggota/view',
			},
		},
		data: function() {
			return {
				data : {
					default :{
						kode_anggota: '',kode_tabungan: '',nama_anggota: '',alamat_anggota: '',jenis_kelamin: '',pekerjaan: '',tgl_masuk: '',telp: '',tempat_lahir: '',tgl_lahir: '',status: '',u_entry: '',tgl_entri: '',
					},
				},
			}
		},
		computed: {
			pageTitle: function(){
				return 'View  T Anggota';
			},
		},
		methods :{
			resetData : function(){
				this.data = {
					kode_anggota: '',kode_tabungan: '',nama_anggota: '',alamat_anggota: '',jenis_kelamin: '',pekerjaan: '',tgl_masuk: '',telp: '',tempat_lahir: '',tgl_lahir: '',status: '',u_entry: '',tgl_entri: '',
				}
			},
		},
	});
	</script>
