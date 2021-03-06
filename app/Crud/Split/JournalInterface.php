<?php
/**
 * JournalInterface.php
 * Copyright (C) 2016 thegrumpydictator@gmail.com
 *
 * This software may be modified and distributed under the terms of the
 * Creative Commons Attribution-ShareAlike 4.0 International License.
 *
 * See the LICENSE file for details.
 */

declare(strict_types = 1);

namespace FireflyIII\Crud\Split;


use FireflyIII\Models\TransactionJournal;
use Illuminate\Support\Collection;

/**
 * Interface JournalInterface
 *
 * @package FireflyIII\Crud\Split
 */
interface JournalInterface
{
    /**
     * @param $journal
     *
     * @return bool
     */
    public function markAsComplete(TransactionJournal $journal);

    /**
     * @param TransactionJournal $journal
     * @param array              $transaction
     * @param int                $identifier
     *
     * @return Collection
     */
    public function storeTransaction(TransactionJournal $journal, array $transaction, int $identifier): Collection;

    /**
     * @param TransactionJournal $journal
     * @param array              $data
     *
     * @return TransactionJournal
     */
    public function updateJournal(TransactionJournal $journal, array $data): TransactionJournal;
}
