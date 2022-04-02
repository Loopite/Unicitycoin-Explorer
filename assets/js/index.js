/** Define the rpc host. */
const rpc = new RPCConfiguration('http://193.57.102.110:27555/');

document.addEventListener('DOMContentLoaded', () => {
    rpc.setHTTPMethod('GET');

    /** Get chain informations. */
    rpc.setRPCMethod('getblockchaininfo');
    rpc.executeRequest(getBlockchainInfo);

    /** Get 10 lasts blocks. */
    rpc.setRPCMethod('getlastblocks');
    rpc.setRPCParams('[10]');
    rpc.executeRequest(getLastBlocks);
})

/**
 * RPC Callback
 */
function getBlockchainInfo()
{
    const rpcResponse = JSON.parse(this.response);
    const rpcResult = rpcResponse.result;

    document.getElementById('total_work').innerText = rpcResult.chainwork.toLocaleString('en-US');
    document.getElementById('block_height').innerText = rpcResult.blocks.toLocaleString('en-US');
}

function getLastBlocks()
{
    const rpcResponse = JSON.parse(this.response);
    const rpcResult = rpcResponse.result;
    const blocks = rpcResult.blocks.reverse();

    blocks.forEach(block => {
        const time = Math.floor((new Date().getTime() / 1000 - block.time) / 60);
        let blockTime;

        switch (time) {
            case 0:
                blockTime = "less than a minute ago"
                break;
        
            case 1:
                blockTime = "a minute ago";
                break;

            default:
                blockTime = time + " minutes ago";
                break;
        }

        document.getElementById('latest-blocks-table').innerHTML += "<tr><td><a href='block/" + block.height + "'>" + block.height.toLocaleString('en-US') + "</a></td><td><abbr class='timeago' title='" + new Date(block.time * 1000).toISOString() + "'>" + blockTime + "</abbr></td><td>" + block.n_tx.toLocaleString('en-US') + "</td><td class='hide-for-small'>" + 0 + "</td>";
    });
}