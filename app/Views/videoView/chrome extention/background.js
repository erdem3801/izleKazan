chrome.runtime.onInstalled.addListener (() => {

    chrome.storage.local.set({
        name:"erdem"
    })
})

chrome.storage.local.get("name",data => {

})