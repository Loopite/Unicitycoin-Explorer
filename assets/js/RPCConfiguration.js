/**
 * Copyright 2021
 * Unicitycoin Explorer Developer.
 * This class is reserved for the RPC's configuration.
 * It used for protected interactions with the explorer and nodes.  
 */

class RPCConfiguration
{
    /**
     * Configure the RPC session.
     * @param {string} rpcHost 
     */
    constructor(rpcHost) {
        this.rpcRequest = new XMLHttpRequest();

        this.rpcHost = rpcHost;
        this.rpcParams = [];
    }

    /**
     * Set the HTTP method which is going to be used.
     * @param {string} httpMethod 
     */
    setHTTPMethod(httpMethod) { 
        this.httpMethod = httpMethod; 
    }

    /**
     * Set the RPC method.
     * @param {string} rpcMethod 
     */
    setRPCMethod(rpcMethod) {
        this.rpcMethod = rpcMethod;
    }

    /** 
     * Set eventually RPC's params. 
     * @param {array} rpcParams
     */
    setRPCParams(rpcParams = []) {
        this.rpcParams = rpcParams;
    }

    /** Get RPC's payload. */
    getRPCPayload()
    {
        switch (this.httpMethod) {
            case 'GET':
                return '?jsonrpc=2.0&method=' + this.rpcMethod + '&params=' + this.rpcParams + '&id=1';
                break;

            case 'POST':
                return { jsonrpc: "2.0", method: this.rpcMethod, params: this.rpcParams, id: 1 };
                break;
        }
    }

    /**
     * Execute a RPC request.
     * @param {*} callback is the function which going to have the response.
     */
    executeRequest(callback) {
        const rpcHost = this.httpMethod === 'GET' ? this.rpcHost + this.getRPCPayload() : this.rpcHost;

        this.rpcRequest.open(this.httpMethod, rpcHost);

        if(this.httpMethod === 'GET') {
            this.rpcRequest.send();
        } else {
            this.rpcRequest.send(JSON.stringify(this.getRPCPayload()));
        }

        this.rpcRequest.responseType = 'application/json';
        this.rpcRequest.onload = callback;

        /** Reset the method and params */
        this.rpcMethod = null;
        this.rpcParams = [];

        this.rpcRequest = new XMLHttpRequest();
    }
}