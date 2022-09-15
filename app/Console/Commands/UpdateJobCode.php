<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Test;
use Exception;
use Illuminate\Support\Facades\DB;

class UpdateJobCode extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:jobcode';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update Job Code';

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
     *
     * @return int
     */
    public function handle()
    {
        DB::beginTransaction();
        try {
            // $tests = Test::all();
            $tests = Test::all();
            foreach ($tests as $test1) {
                if ($test1->job_code == null) {
                    $str_pad = str_pad($test1->id, 6, "0", STR_PAD_LEFT);
                    $code = "BIB_JB-(" . $str_pad . ")";
                    $test1->job_code = $code;
                    $test1->save();
                }
            }
            DB::commit();
            $this->info('Update Successfully...');
        } catch (Exception $e) {
            DB::rollBack();
            $this->info($e->getMessage());
            return $e;
        }
    }
}
