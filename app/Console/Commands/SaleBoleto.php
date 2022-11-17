<?php

namespace App\Console\Commands;

use App\Models\StatusPayments;
use App\Models\StatusSale;
use App\Models\StatusSaleSale;
use App\Services\PaymentGatewayService;
use App\Services\PaymentService;
use App\Services\StatusPaymentService;
use Illuminate\Console\Command;

class SaleBoleto extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'aware:boletos';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Analisa as vendas que foram feitas com boletos';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $paymentService = new PaymentService();
        $gateway = new PaymentGatewayService();
        $payments = $paymentService->listByBoletoWait();
        $paids = 0;
        if ($payments) {
            foreach ($payments as $payment) {
                $trasaction = $gateway->get($payment->transaction);
                if ($trasaction->status === "paid") {
                    $statusPaymentService = new StatusPaymentService();
                    $statusPaymentService->setStatus($payment, StatusPayments::PAID);
                    $paids++;
                    $this->info("Pagamento: " . $payment->transaction . " foi pago!");
                    StatusSaleSale::create([
                        "sale_id" => $payment->sale_id,
                        "status_sale_id" => StatusSale::SEPARATION
                    ]);
                }

            }
        }

        $this->info($paids . " pagamento(s)");

    }
}
