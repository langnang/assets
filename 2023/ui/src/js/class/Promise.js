/**
 * Promise
 */

class Promise {
    constructor(executor) {
        this.status = "PENDING";


        let resolve = function (response) {

        }

        let reject = function (error) {

        }

        try {
            executor(resolve, reject);
        } catch (e) {
            reject(e);
        }

    }
}

