/** Define the rpc host. */
const rpc = new RPCConfiguration('http://193.57.102.110:27555/');
const id = document.getElementById("blockId").getAttribute('value');
getBlockById(parseInt(id))
function getBlockById(id) {
    // document.addEventListener('DOMContentLoaded', () => {
    rpc.setHTTPMethod('POST');
    rpc.setRPCMethod('getblock');
    rpc.setRPCParams([id]);
    rpc.executeRequest(getRPCResponse);
    // })
    // rpc.setHTTPMethod('GET');
    // rpc.setRPCMethod('getlastblocks');
    // rpc.setRPCParams('[1]');
    // rpc.executeRequest(getLastBlocks);
}

/**
 * RPC Callback
 */
function getRPCResponse()
{
    const rpcResponse = JSON.parse(this.response);
    const rpcResult = rpcResponse.result;
    if (rpcResult.error != undefined){
        document.location.href = "../404/404.html";
    } else {
        document.getElementById('hashBlock').innerText = rpcResult.hash.toLocaleString('en-US');
        document.getElementById('previousHash').innerText = rpcResult.previousblockhash.toLocaleString('en-US');
        if (id >= 1) {
            document.getElementById('previousHash').setAttribute('href', '../block.php/'+(id-1));
        } else {
            let elem = document.getElementById('previousHash')
            elem.parentNode.removeChild(elem);
        }
        
        document.getElementById('heightBlock').innerText = id;
        document.getElementById('date').innerText = new Date(rpcResult.time * 1000).toDateString();
        document.getElementById('version').innerText = rpcResult.version.toLocaleString('en-US');
        document.getElementById('currentDifficulty').innerText = "0 (Bits: " + rpcResult.bits + ")";
        document.getElementById('transactionBlock').innerText = rpcResult.merkleroot.toLocaleString('en-US');
        document.getElementById('nonce').innerText = rpcResult.nonce.toLocaleString('en-US');
        document.getElementById('numberTransactions').innerText = rpcResult.tx.length.toLocaleString('en-US');

        rpcResult.tx.forEach(element => {
            let address = element.inputs[0].address;
            let value = element.outputs[0].value;
            let decimal = value.toString().split('.');

            if (decimal.length == 1) {
                value += '.' +  '00000000   ';
            } else if (decimal[1].length != 8){
                value = decimal[1] + '.' + (decimal[0] + '00000000').slice(0, 8)
            }

            if (address == "coinbase") {
                address = "</a>Generation : " + value;
            } else {
                address += "</a> : " + value;
            }

            document.getElementById('transaction-table').innerHTML += "<tr><td><a href='../tx.php/" + element.hash + "'>" + element.hash.slice(0, 8) + "..." + element.hash.slice(-8) + "</a></td><td>0</td><td><a href='#'>" + address + "</a><br></td><td><a href='#'>" + element.outputs[0].address + "</a> : " + element.outputs[0].value + "<br></td></tr>"
        });
    }
    
}
