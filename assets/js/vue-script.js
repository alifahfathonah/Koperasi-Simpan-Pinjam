var bus = new Vue({});
var routes = [
  
	{ path: '/', name: 'home' , component: HomeComponent },

	{ path: '/t_anggota', name: 't_anggotalist', component: T_AnggotaListComponent },
	{ path: '/t_anggota/(index|list)', name: 't_anggotalist' , component: T_AnggotaListComponent },
	{ path: '/t_anggota/(index|list)/:fieldname/:fieldvalue', name: 't_anggotalist' , component: T_AnggotaListComponent , props: true },
	{ path: '/t_anggota/view/:id', name: 't_anggotaview' , component: T_AnggotaViewComponent , props: true},
	{ path: '/t_anggota/view/:fieldname/:fieldvalue', name: 't_anggotaview' , component: T_AnggotaViewComponent , props: true },
	{ path: '/t_anggota/add', name: 't_anggotaadd' , component: T_AnggotaAddComponent },
	{ path: '/t_anggota/edit/:id' , name: 't_anggotaedit' , component: T_AnggotaEditComponent , props: true},
	{ path: '/t_anggota/edit', name: 't_anggotaedit' , component: T_AnggotaEditComponent , props: true},

	{ path: '/t_angsur', name: 't_angsurlist', component: T_AngsurListComponent },
	{ path: '/t_angsur/(index|list)', name: 't_angsurlist' , component: T_AngsurListComponent },
	{ path: '/t_angsur/(index|list)/:fieldname/:fieldvalue', name: 't_angsurlist' , component: T_AngsurListComponent , props: true },
	{ path: '/t_angsur/view/:id', name: 't_angsurview' , component: T_AngsurViewComponent , props: true},
	{ path: '/t_angsur/view/:fieldname/:fieldvalue', name: 't_angsurview' , component: T_AngsurViewComponent , props: true },
	{ path: '/t_angsur/add', name: 't_angsuradd' , component: T_AngsurAddComponent },
	{ path: '/t_angsur/edit/:id' , name: 't_angsuredit' , component: T_AngsurEditComponent , props: true},
	{ path: '/t_angsur/edit', name: 't_angsuredit' , component: T_AngsurEditComponent , props: true},

	{ path: '/t_jenis_pinjam', name: 't_jenis_pinjamlist', component: T_Jenis_PinjamListComponent },
	{ path: '/t_jenis_pinjam/(index|list)', name: 't_jenis_pinjamlist' , component: T_Jenis_PinjamListComponent },
	{ path: '/t_jenis_pinjam/(index|list)/:fieldname/:fieldvalue', name: 't_jenis_pinjamlist' , component: T_Jenis_PinjamListComponent , props: true },
	{ path: '/t_jenis_pinjam/view/:id', name: 't_jenis_pinjamview' , component: T_Jenis_PinjamViewComponent , props: true},
	{ path: '/t_jenis_pinjam/view/:fieldname/:fieldvalue', name: 't_jenis_pinjamview' , component: T_Jenis_PinjamViewComponent , props: true },
	{ path: '/t_jenis_pinjam/add', name: 't_jenis_pinjamadd' , component: T_Jenis_PinjamAddComponent },
	{ path: '/t_jenis_pinjam/edit/:id' , name: 't_jenis_pinjamedit' , component: T_Jenis_PinjamEditComponent , props: true},
	{ path: '/t_jenis_pinjam/edit', name: 't_jenis_pinjamedit' , component: T_Jenis_PinjamEditComponent , props: true},

	{ path: '/t_jenis_simpan', name: 't_jenis_simpanlist', component: T_Jenis_SimpanListComponent },
	{ path: '/t_jenis_simpan/(index|list)', name: 't_jenis_simpanlist' , component: T_Jenis_SimpanListComponent },
	{ path: '/t_jenis_simpan/(index|list)/:fieldname/:fieldvalue', name: 't_jenis_simpanlist' , component: T_Jenis_SimpanListComponent , props: true },
	{ path: '/t_jenis_simpan/view/:id', name: 't_jenis_simpanview' , component: T_Jenis_SimpanViewComponent , props: true},
	{ path: '/t_jenis_simpan/view/:fieldname/:fieldvalue', name: 't_jenis_simpanview' , component: T_Jenis_SimpanViewComponent , props: true },
	{ path: '/t_jenis_simpan/add', name: 't_jenis_simpanadd' , component: T_Jenis_SimpanAddComponent },
	{ path: '/t_jenis_simpan/edit/:id' , name: 't_jenis_simpanedit' , component: T_Jenis_SimpanEditComponent , props: true},
	{ path: '/t_jenis_simpan/edit', name: 't_jenis_simpanedit' , component: T_Jenis_SimpanEditComponent , props: true},

	{ path: '/t_pengajuan', name: 't_pengajuanlist', component: T_PengajuanListComponent },
	{ path: '/t_pengajuan/(index|list)', name: 't_pengajuanlist' , component: T_PengajuanListComponent },
	{ path: '/t_pengajuan/(index|list)/:fieldname/:fieldvalue', name: 't_pengajuanlist' , component: T_PengajuanListComponent , props: true },
	{ path: '/t_pengajuan/view/:id', name: 't_pengajuanview' , component: T_PengajuanViewComponent , props: true},
	{ path: '/t_pengajuan/view/:fieldname/:fieldvalue', name: 't_pengajuanview' , component: T_PengajuanViewComponent , props: true },
	{ path: '/t_pengajuan/add', name: 't_pengajuanadd' , component: T_PengajuanAddComponent },
	{ path: '/t_pengajuan/edit/:id' , name: 't_pengajuanedit' , component: T_PengajuanEditComponent , props: true},
	{ path: '/t_pengajuan/edit', name: 't_pengajuanedit' , component: T_PengajuanEditComponent , props: true},

	{ path: '/t_pengambilan', name: 't_pengambilanlist', component: T_PengambilanListComponent },
	{ path: '/t_pengambilan/(index|list)', name: 't_pengambilanlist' , component: T_PengambilanListComponent },
	{ path: '/t_pengambilan/(index|list)/:fieldname/:fieldvalue', name: 't_pengambilanlist' , component: T_PengambilanListComponent , props: true },
	{ path: '/t_pengambilan/view/:id', name: 't_pengambilanview' , component: T_PengambilanViewComponent , props: true},
	{ path: '/t_pengambilan/view/:fieldname/:fieldvalue', name: 't_pengambilanview' , component: T_PengambilanViewComponent , props: true },
	{ path: '/t_pengambilan/add', name: 't_pengambilanadd' , component: T_PengambilanAddComponent },
	{ path: '/t_pengambilan/edit/:id' , name: 't_pengambilanedit' , component: T_PengambilanEditComponent , props: true},
	{ path: '/t_pengambilan/edit', name: 't_pengambilanedit' , component: T_PengambilanEditComponent , props: true},

	{ path: '/t_petugas', name: 't_petugaslist', component: T_PetugasListComponent },
	{ path: '/t_petugas/(index|list)', name: 't_petugaslist' , component: T_PetugasListComponent },
	{ path: '/t_petugas/(index|list)/:fieldname/:fieldvalue', name: 't_petugaslist' , component: T_PetugasListComponent , props: true },
	{ path: '/t_petugas/view/:id', name: 't_petugasview' , component: T_PetugasViewComponent , props: true},
	{ path: '/t_petugas/view/:fieldname/:fieldvalue', name: 't_petugasview' , component: T_PetugasViewComponent , props: true },
	{ path: '/t_petugas/add', name: 't_petugasadd' , component: T_PetugasAddComponent },
	{ path: '/t_petugas/edit/:id' , name: 't_petugasedit' , component: T_PetugasEditComponent , props: true},
	{ path: '/t_petugas/edit', name: 't_petugasedit' , component: T_PetugasEditComponent , props: true},

	{ path: '/t_pinjam', name: 't_pinjamlist', component: T_PinjamListComponent },
	{ path: '/t_pinjam/(index|list)', name: 't_pinjamlist' , component: T_PinjamListComponent },
	{ path: '/t_pinjam/(index|list)/:fieldname/:fieldvalue', name: 't_pinjamlist' , component: T_PinjamListComponent , props: true },
	{ path: '/t_pinjam/view/:id', name: 't_pinjamview' , component: T_PinjamViewComponent , props: true},
	{ path: '/t_pinjam/view/:fieldname/:fieldvalue', name: 't_pinjamview' , component: T_PinjamViewComponent , props: true },
	{ path: '/t_pinjam/add', name: 't_pinjamadd' , component: T_PinjamAddComponent },
	{ path: '/t_pinjam/edit/:id' , name: 't_pinjamedit' , component: T_PinjamEditComponent , props: true},
	{ path: '/t_pinjam/edit', name: 't_pinjamedit' , component: T_PinjamEditComponent , props: true},

	{ path: '/t_simpan', name: 't_simpanlist', component: T_SimpanListComponent },
	{ path: '/t_simpan/(index|list)', name: 't_simpanlist' , component: T_SimpanListComponent },
	{ path: '/t_simpan/(index|list)/:fieldname/:fieldvalue', name: 't_simpanlist' , component: T_SimpanListComponent , props: true },
	{ path: '/t_simpan/view/:id', name: 't_simpanview' , component: T_SimpanViewComponent , props: true},
	{ path: '/t_simpan/view/:fieldname/:fieldvalue', name: 't_simpanview' , component: T_SimpanViewComponent , props: true },
	{ path: '/t_simpan/add', name: 't_simpanadd' , component: T_SimpanAddComponent },
	{ path: '/t_simpan/edit/:id' , name: 't_simpanedit' , component: T_SimpanEditComponent , props: true},
	{ path: '/t_simpan/edit', name: 't_simpanedit' , component: T_SimpanEditComponent , props: true},

	{ path: '/t_tabungan', name: 't_tabunganlist', component: T_TabunganListComponent },
	{ path: '/t_tabungan/(index|list)', name: 't_tabunganlist' , component: T_TabunganListComponent },
	{ path: '/t_tabungan/(index|list)/:fieldname/:fieldvalue', name: 't_tabunganlist' , component: T_TabunganListComponent , props: true },
	{ path: '/t_tabungan/view/:id', name: 't_tabunganview' , component: T_TabunganViewComponent , props: true},
	{ path: '/t_tabungan/view/:fieldname/:fieldvalue', name: 't_tabunganview' , component: T_TabunganViewComponent , props: true },
	{ path: '/t_tabungan/add', name: 't_tabunganadd' , component: T_TabunganAddComponent },
	{ path: '/t_tabungan/edit/:id' , name: 't_tabunganedit' , component: T_TabunganEditComponent , props: true},
	{ path: '/t_tabungan/edit', name: 't_tabunganedit' , component: T_TabunganEditComponent , props: true},

	{ path: '/t_user', name: 't_userlist', component: T_UserListComponent },
	{ path: '/t_user/(index|list)', name: 't_userlist' , component: T_UserListComponent },
	{ path: '/t_user/(index|list)/:fieldname/:fieldvalue', name: 't_userlist' , component: T_UserListComponent , props: true },
	{ path: '/t_user/view/:id', name: 't_userview' , component: T_UserViewComponent , props: true},
	{ path: '/t_user/view/:fieldname/:fieldvalue', name: 't_userview' , component: T_UserViewComponent , props: true },
	{ path: '/t_user/add', name: 't_useradd' , component: T_UserAddComponent },
	{ path: '/t_user/edit/:id' , name: 't_useredit' , component: T_UserEditComponent , props: true},
	{ path: '/t_user/edit', name: 't_useredit' , component: T_UserEditComponent , props: true},

	{ path: '/home', name: 'home' , component: HomeComponent },
	{ path: '*', name: 'pagenotfound' , component: ComponentNotFound }
];

var router = new VueRouter({
	routes:routes,
	linkExactActiveClass:'active',
	linkActiveClass:'active',
	//mode:'history'
});
router.beforeEach(function(to, from, next) {
	document.body.className = to.name;
	
	next();

});
var config = {
	errorBagName: 'errors', // change if property conflicts
	fieldsBagName: 'fields', 
	delay: 0, 
	locale: '', 
	dictionary: null, 
	strict: true, 
	classes: false, 
	classNames: {
		touched: 'touched', // the control has been blurred
		untouched: 'untouched', // the control hasn't been blurred
		valid: 'valid', // model is valid
		invalid: 'invalid', // model is invalid
		pristine: 'pristine', // control has not been interacted with
		dirty: 'dirty' // control has been interacted with
	},
	events: 'input|blur',
	inject: true,
	validity: false,
	aria: true,
	i18n: null, // the vue-i18n plugin instance,
	i18nRootKey: 'validations', // the nested key under which the validation messsages will be located
};

Vue.use(VeeValidate,config);
Vue.http.interceptors.push(function(request, next) {
	next(function(response){
		if(response.status == 401 ) {
			if(this.$route.name != 'index'){
				window.location = "/"
				//this.$router.push('index');
			}
		}
		else if(response.status == 403 ) {
			alert(response.statusText);
			window.location = 'errors/forbidden';
		}
	});
});
Vue.mixin({
	data: function() {
		return {
			get ActiveUser() {
				return ActiveUser
			}
		}
	},
	methods: {
		SetPageTitle: function(title, pagename){
			document.title = title;
		},
		setPhotoUrl: function(src, width,height){
			var newSrc = 'helpers/timthumb.php?src=' + src;
			if(width){
				newSrc = newSrc + '&w=' + width
			}
			if(height){
				newSrc = newSrc + '&h=' + height	
			}
			return  newSrc;
		},
		exportPage: function(pagehtml , reporttitle){
			var form = document.getElementById("exportform");
			document.getElementById("exportformdata").value = pagehtml ;
			document.getElementById("exportformtitle").value = reporttitle ;
			form.submit();
		}
	}
});

var app = new Vue({
	el: '#app',
	router: router,
	data:{
		showPageError : false,
		pageErrorMsg : '',
		pageErrorStatus : '',
		modalComponentName: '',
		modalComponentProps: '',
		popoverTarget : '',
		showModalView : false,
		showFlash : false,
		flashMsg : '',
	},
	watch : {
		'$route': function(){
			this.pageErrorMsg = '' ;
			this.showPageError = false ;
		},
	},
	mounted : function(){
		this.$on('requestCompleted' ,  function (msg) {
			this.showModal = false;
			if(msg){
				this.showFlash = 3 ;
				this.flashMsg = msg ;
			}
			bus.$emit('refresh');
		});
		this.$on('requestError' ,  function (response) {
			this.pageErrorMsg = response.bodyText ;
			this.pageErrorStatus = response.statusText ;
			this.showPageError = true ;
		})
		
		this.$on('showPageModal' ,  function (props) {
			if(props.page){
				this.modalComponentName = props.page;
				delete props.page;
				props.resetgrid = true; // reset columns so that page components will fit well
				this.modalComponentProps = props;
				this.showModalView = true;
			}
			else{
				console.error("No Page Defined")
			}
		})
		
		this.$on('showPopOver' ,  function (props) {
			if(props.page && props.target){
				this.modalComponentName = props.page;
				this.popoverTarget = props.target;
				delete props.page;
				delete props.target;
				props.resetgrid=true;
				this.modalComponentProps = props;
			}
			else{
				console.error("No Page or Target  Defined")
			}
		})
		
		this.$on('showListModal' ,  function (arr) {
			this.modalComponentName = arr[0];
			this.modalFieldName = arr[1];
			this.modalFieldValue = arr[2];
			this.showModalList = true;
		})
	}
});


Vue.filter('toUSD', function (value) {
	return '$'+ value;
});
Vue.filter('upper', function (value) {
	return value.toUpperCase();
});
Vue.filter('lower', function (value) {
	return value.toLowerCase();
});
Vue.filter('proper', function (value) {
	return value.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
});
Vue.filter('truncate', function (text, length, suffix) {
	return text.substring(0, length) + suffix;
});
Vue.filter('toFixed', function (price, limit) {
	return price.toFixed(limit);
});
Vue.filter('makeRead', function (str) {
	return str.replace(/[-_]/g, " ");
});
Vue.filter('humanDate', function (datestr) {
	var timeStamp = new Date(datestr);
	return timeStamp.toDateString();
});
Vue.filter('humanTime', function (datestr) {
	var timeStamp = new Date(datestr);
	return timeStamp.toLocaleTimeString();
});

Vue.filter('toLocaleString', function (val) {
	return val.toLocaleString();
});
