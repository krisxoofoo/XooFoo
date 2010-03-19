// PAC file for 5.5-Nano: Automatically updated from
// Apanel 'Admin Virtual Hosts' Note: only adds new entries
// If you wish you can edit this file
function FindProxyForURL (url, host){
if (shExpMatch(url,"http://localhost*")) return "PROXY 127.0.0.1:80";
if (shExpMatch(url,"http://localhost:80*")) return "PROXY 127.0.0.1:80";
return "";
}