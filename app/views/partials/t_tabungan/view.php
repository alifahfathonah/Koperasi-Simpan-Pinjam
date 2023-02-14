    <template id="t_tabunganView">
        <section class="page-component">
            <div v-if="showheader" class="bg-light p-3 mb-3">
                <div class="container">
                    <div class="row ">
                        <div  class="col-12 comp-grid" :class="setGridSize">
                            <h3 class="record-title">View  T Tabungan</h3>
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
                                                    <th class="title"> Kode Tabungan :</th>
                                                    <td class="value"> {{ data.kode_tabungan }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Kode Anggota :</th>
                                                    <td class="value"> {{ data.kode_anggota }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Tgl Mulai :</th>
                                                    <td class="value"> {{ data.tgl_mulai }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Besar Tabungan :</th>
                                                    <td class="value"> {{ data.besar_tabungan }} </td>
                                                </tr>
                                            </tbody>
                                            <!-- Table Body End -->
                                        </table>
                                    </div>
                                    <div v-if="editbutton || deletebutton || exportbutton" class="py-3">
                                        <span >
                                            <router-link class="btn btn-sm btn-info has-tooltip" v-if="editbutton"  :to="'/t_tabungan/edit/'  + data.kode_tabungan">
                                            <i class="fa fa-edit"></i> 
                                            </router-link>
                                            <button @click="deleteRecord" class="btn btn-sm btn-danger" v-if="deletebutton" :to="'/t_tabungan/delete/' + data.kode_tabungan">
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
	var T_TabunganViewComponent = Vue.component('t_tabunganView', {
		template : '#t_tabunganView',
		mixins: [ViewPageMixin],
		props: {
			pagename: {
				type : String,
				default : 't_tabungan',
			},
			routename : {
				type : String,
				default : 't_tabunganview',
			},
			apipath: {
				type : String,
				default : 't_tabungan/view',
			},
		},
		data: function() {
			return {
				data : {
					default :{
						kode_tabungan: '',kode_anggota: '',tgl_mulai: '',besar_tabungan: '',
					},
				},
			}
		},
		computed: {
			pageTitle: function(){
				return 'View  T Tabungan';
			},
		},
		methods :{
			resetData : function(){
				this.data = {
					kode_tabungan: '',kode_anggota: '',tgl_mulai: '',besar_tabungan: '',
				}
			},
		},
	});
	</script>
