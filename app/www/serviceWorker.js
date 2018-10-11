
const register = ()=>{
    return new Promise((resolve, reject)=>{
        if(!('serviceWorker' in navigator)){
            reject(new error(`this browser dosen't supports service workers`));
        }
        resolve(navigator.serviceWorker.register('/serviceWorker.js'));
    });
};

window.addEventListener('load', ()=>{
    register()
    .then(()=>{})
    .catch((err)=>{
        console.log('service worker error: ', err);
    });
});

