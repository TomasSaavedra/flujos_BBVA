var useSmartBanner = ($('meta[name="useSmartBanner"]').length > 0 && $('meta[name="useSmartBanner"]').attr('content') == "false") ? false : true;
if (useSmartBanner) {
  $.smartbanner({
  title: 'BBVA | Chile', 
  author: 'BBVA', 
  price: 'GRATIS', 
  appStoreLanguage: 'es', 
  inAppStore: 'En App Store',
  inGooglePlay: 'En Google Play', 
  inWindowsStore: 'En Windows Store', 
  GooglePlayParams: null, 
  icon: '/fbin/css/img/app-icon-opt.png', 
  iconGloss: null, 
  button: 'Ver', 
  scale: 'auto', 
  speedIn: 300, 
  speedOut: 400,
  daysHidden: 15,
  daysReminder: 90, 
  force: null, 
  hideOnInstall: true, 
  nombreCookie: 'sb-closed3009',  
  appendToSelector: 'body'
});
}